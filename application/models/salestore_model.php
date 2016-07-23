<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sale_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    public function getSelectDropdown($store_code_array)
    {
        $sql = "SELECT CONCAT_WS('/',MONTH(start_date),YEAR(start_date))  as month_year FROM 
            sale where store_code in  (".implode(',', array_fill(0, count($store_code_array), '?')).") group by MONTH(start_date),YEAR(start_date) order by MONTH(start_date)";
        $store_code_array = is_array( $store_code_array ) ? $store_code_array : array( $store_code_array );
        $query = $this->db->query($sql ,$store_code_array);
        log_message('debug',$this->db->last_query());
        return $query;
    }
    public function lookup_moderntrade($modern_trade_code)
    {
        $sql = "select * from modern_trade_lookup where modern_trade_code = ?";
        $query = $this->db->query($sql,array($modern_trade_code));
        
        log_message('debug',$this->db->last_query());
        return $query;
    }
    public function get_store_lookup($store_code_array)
    {
         $sql = "select * from modern_trade_lookup
        where store_code in (".implode(',', array_fill(0, count($store_code_array), '?')).") order by modern_trade_code";
        $store_code_array = is_array( $store_code_array ) ? $store_code_array : array( $store_code_array );
        $query = $this->db->query($sql ,$store_code_array);
        log_message('debug',$this->db->last_query());
        return $query;
    }
    public function get_store_info($store_code)
    {
        $sql =  "SELECT * FROM store left join modern_trade_lookup on modern_trade_lookup.store_code = store.code WHERE code = ?";
        return $this->db->query($sql,array($store_code));    
    }

    public function view_summary($store_code_array,$month,$year)
    {
        $sql = "select * from sale inner join sale_detail on sale.id = sale_detail.sale_id 
        left join store on store.code = sale.store_code
        left join product on product.korea_barcode = sale_detail.product_korea_barcode 
        where store_code in (".implode(',', array_fill(0, count($store_code_array), '?')).") and MONTH(start_date) = ? and YEAR(start_date) = ? ";
        $store_code_array = is_array( $store_code_array ) ? $store_code_array : array( $store_code_array );
        $query = $this->db->query($sql ,array_merge( $store_code_array, array( $month ,$year) ));
        log_message('debug',$this->db->last_query());
        return $query;
    }
    public function viewall()
    {
        return $this->db->query('select * from sale left join store  as store1 on store1.code = sale.store_code order by start_date,end_date desc');
    }
     public function insert_sale($data)
    {
        if($this->db->insert('sale',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_sale($data,$sale_id)
    {
        $this->db->where('id',$sale_id);
        if($this->db->update('sale',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function sale_b2s_import($data,$store_code,$last_date_month)
    {
        $this->db->trans_start();
        $this->db->where('store_code',$store_code);
        $this->db->where('sale_date',$last_date_month);
        $this->db->delete('sale');
        $this->db->insert_batch('sale',$data);
        $this->db->trans_complete();
    }
    // public function view_summary($product_search,$store_code_search,$last_date_month)
    // {
    //         $sql = "SELECT *
    //             from sale 
    //             inner join product 
    //                 on product.korea_barcode = sale.product_korea_barcode
    //             inner join store
    //                 on store.code = sale.store_code \n";
    //         $is_where = false;
    //         $param = array();
    //         if(!empty($product_search))
    //         {
    //             if(!$is_where)
    //             {
    //                 $sql = $sql." WHERE \n";
    //                 $is_where = true;
    //             }
    //             $sql = $sql."korea_barcode in (".$product_search.")\n";
    //            // $param[] = $product_search;             
    //         }
    //         if(!empty($store_code_search))
    //         {
    //             if(!$is_where)
    //             {
    //                 $sql = $sql."WHERE \n";
    //                 $is_where = true;
    //             }else{
    //                 $sql = $sql."AND \n";
    //             }
    //              $sql = $sql." sale.store_code = ? \n";
    //             $param[] = $store_code_search;
    //         }  
    //         if(!empty($last_date_month))
    //         {
    //             if(!$is_where)
    //             {
    //                 $sql = $sql."WHERE \n";
    //                 $is_where = true;
    //             }else{
    //                 $sql = $sql."AND \n";
    //             }
    //             $sql = $sql." sale.sale_date = ? \n";
    //             $param[] = $store_code_search;
    //         }
    //         $sql = $sql."GROUP BY store_code,product_korea_barcode,sale_date ORDER BY product_korea_barcode asc";

    //     $query = $this->db->query($sql,$param);
    //     log_message('debug',$this->db->last_query());
    //     return $query;
    // }
    public function get_sale_by_id($sale_id)
    {
        $sql = "select * from sale where id = ?";
        $query = $this->db->query($sql,$sale_id);
        return $query;
    }
    public function get_sale_detail_by_sale_id($sale_id)
    {
        $sql = "select * from sale_detail inner join product on product_korea_barcode = korea_barcode where sale_id = ?";
        $query = $this->db->query($sql,$sale_id);
        return $query;   
    }

    public function update_sale_detail($datas,$sale_id)
    {
        $this->db->trans_start();
        $data = array();
        $this->db->where('sale_id',$sale_id);
        $this->db->delete('sale_detail');
        if(!empty($datas))
        {
            foreach ($datas as $row) {
                $result = $this->db->query('select * from sale_detail where sale_id = ? and product_korea_barcode = ?',array($row['sale_id'],$row['product_korea_barcode']));
                if($result->num_rows() > 0)
                {
                    $current_qty = $result->row()->qty + $row['qty'];
                    $this->db->where('sale_id',$row['sale_id']);
                    $this->db->where('product_korea_barcode',$row['product_korea_barcode']);
                    $result = $this->db->update('sale_detail',array('qty'=>$qty));
                }
                else
                {
                     $result = $this->db->insert('sale_detail',$row);
                }
                if(!$result)
                {
                    log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                    $msg = $this->db->_error_message();
                    $num = $this->db->_error_number();

                    $data['msg'] = "Error(".$num.") ".$msg;
                    return $data;
                }
            }
        }
        $this->db->trans_complete();
        
        return $data;
    }
}