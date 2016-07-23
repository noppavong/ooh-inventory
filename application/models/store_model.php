<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Store_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    public function viewall()
    {
    	$sql = "select * from store where status ='A'";
    	$query = $this->db->query($sql);
    	return $query;
    }
    public function get_store($store_code)
    {
        $sql = "select * from store where status ='A' and code = ?";
        $query = $this->db->query($sql,array($store_code));
        return $query;
    }
    public function find_store_detail($store_id)
    {
        $sql = "select * from store where code = ?";
        $query = $this->db->query($sql, $store_id);
        return $query;
    }
    public function find_amount_by_kbar($product_korea_barcode,$store_code)
    {
       
        $this->db->select(" * ");
        $this->db->from("store_product");
        $this->db->where_in('product_korea_barcode',$product_korea_barcode);
        $this->db->where('store_code',$store_code);
        $query = $this->db->get();
        return $query;        
    }
    public function delete_rec($rectify_id)
    {
        $this->db->where('rectify_id',$rectify_id);
        $this->db->delete('rectify_item');
        $this->db->where('id',$rectify_id);
        $this->db->delete('rectify');
    }
    public function delete_recitem($rectify_item_id)
    {
        $this->db->where('rectify_item_id',$rectify_item_id);
        $this->db->delete('rectify_item');
    }
    public function viewAllRectify()
    {
        $sql = "select * from rectify left outer join store on store.code = rectify.store_code";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_rec_detail($rectify_id)
    {
        $sql = "select * from rectify where id = ?";
        return $this->db->query($sql,$rectify_id);
    }
    public function get_rec_item($rectify_id)
    {
        $sql = "select * from rectify_item  left outer join product on rectify_item.product_korea_barcode = product.korea_barcode where rectify_id = ?";
        return $this->db->query($sql,$rectify_id);
    }
    public function get_rec_item_detail($rectify_item_id)
    {
        $sql = "select * from rectify_item  left outer join product on rectify_item.product_korea_barcode = product.korea_barcode where rectify_item_id = ?";
        return $this->db->query($sql,$rectify_item_id);   
    }
    public function get_previous_amt($korea_barcode,$store_code)
    {
        $sql = "select amount from store_product where product_korea_barcode = ? and store_code = ?";
        return $this->db->query($sql,array($korea_barcode,$store_code));
    }
    public function insert_rectify($data)
    {
        $this->db->insert('rectify',$data);
        return $this->db->insert_id();
    }
    public function update_rectify($data,$rectify_id)
    {
        $this->db->where('id',$rectify_id);
        $this->db->update('rectify',$data);
    }
    public function save_rectify_item($rectify_item_id,$data,$store_code)
    {

       $sql2 = 'SELECT * FROM store_product WHERE store_product.product_korea_barcode = ? AND store_product.store_code = ?';
       $result = $this->db->query($sql2,array($data['product_korea_barcode'],$store_code));
       if($result->num_rows() > 0)
       {
           $data['previous_amount'] = $result->row()->amount;
       }
       else
       {
         $data['previous_amount'] = 0;
       }
        if(!empty($rectify_item_id))
        {
            $this->db->where('rectify_item_id',$rectify_item_id);
            $this->db->update('rectify_item',$data);
            return $rectify_item_id;
        }
        else
        {
             $result = $this->db->query('select * from rectify_item where rectify_id = ? and product_korea_barcode = ?',array($data['rectify_id'],$data['product_korea_barcode']));
            if($result->num_rows() > 0)
            {
                $rectify_item_id = $result->row()->rectify_item_id;
                $this->db->where('rectify_item_id',$result->row()->rectify_item_id);
                $this->db->update('rectify_item',array('current_amount' => $result->row()->current_amount+$data['current_amount']));
            }
            else
            {
                 $this->db->insert('rectify_item',$data);
                 $rectify_item_id = $this->db->insert_id();
            }
            return $rectify_item_id;
        }

    }
    public function update_rectify_item($data,$rectify_id,$store_code)
    {
        $this->db->where('rectify_id',$rectify_id);
        $this->db->delete('rectify_item');
        foreach ($data as $entry) {
                $result = $this->db->query('select * from rectify_item where rectify_id = ? and product_korea_barcode = ?',array($rectify_id,$entry['product_korea_barcode']));
                if($result->num_rows() > 0)
                {
                    $current_amount = $result->row()->current_amount + $entry->current_amount;
                    $this->db->where('rectify_id',$rectify_id);
                    $this->db->where('product_korea_barcode',$entry->product_korea_barcode);
                    $this->db->update('rectify_item',array('current_amount'=>$current_amount));
                }
                else
                { 
                   $object = $entry;
                   $object['rectify_id'] = $rectify_id;
                   $sql2 = 'SELECT * FROM store_product WHERE store_product.product_korea_barcode = ? AND store_product.store_code = ?';
                   $result = $this->db->query($sql2,array($object['product_korea_barcode'],$store_code));
                   $object['previous_amount'] = $result->row()->amount;
                   $this->db->insert('rectify_item',$object);
               }
        }
        $sql_1 = 'select * from rectify where id = ?';
        $sql_2 = 'select * from rectify_item where rectify_id = ?';
        $sql_3 = 'select * from store_product where store_code = ?';

        $result_1 = $this->db->query($sql_1,$rectify_id);
        $result_2  = $this->db->query($sql_2,$rectify_id);    
        $result_3 = $this->db->query($sql_3,array($result_1->row()->store_code));

        foreach ($result_3->result() as $row_1) 
        {
            log_message('DEBUG',' korea barcode '.$row_1->product_korea_barcode);
            $found = FALSE;
            foreach ($result_2->result() as $row_2) 
            {
                if($row_2->product_korea_barcode === $row_1->product_korea_barcode)
                {
                    $found = TRUE;
                   
                }
            }
            if(!$found)
            {
                if($row_1->amount > 0)
                {
                    log_message('DEBUG','NOT FOUND ');
                    $rectify_item = new StdClass;
                    $rectify_item->rectify_id = $rectify_id;
                    $rectify_item->previous_amount = $row_1->amount;
                    $rectify_item->current_amount = 0;
                    $rectify_item->product_korea_barcode = $row_1->product_korea_barcode;
                    $this->db->insert('rectify_item',$rectify_item);
                }
            }

        }
    }
      public function update_rectify_item_mobile($data,$rectify_id,$store_code)
    {
        $this->db->where('rectify_id',$rectify_id);
        $this->db->delete('rectify_item');
        foreach ($data as $entry) {
                $result = $this->db->query('select * from rectify_item where rectify_id = ? and product_korea_barcode = ?',array($rectify_id,$entry['product_korea_barcode']));
                if($result->num_rows() > 0)
                {
                    $current_amount = $result->row()->current_amount + $entry->current_amount;
                    $this->db->where('rectify_id',$rectify_id);
                    $this->db->where('product_korea_barcode',$entry->product_korea_barcode);
                    $this->db->update('rectify_item',array('current_amount'=>$current_amount));
                }
                else
                { 
                   $object = $entry;
                   $object['rectify_id'] = $rectify_id;
                   $sql2 = 'SELECT * FROM store_product WHERE store_product.product_korea_barcode = ? AND store_product.store_code = ?';
                   $result = $this->db->query($sql2,array($object['product_korea_barcode'],$store_code));
                   $object['previous_amount'] = $result->row()->amount;
                   $this->db->insert('rectify_item',$object);
               }
        }
    }
    public function update_rectify_no_data($rectify_id)
    {
        $sql_1 = 'select * from rectify where id = ?';
        $sql_2 = 'select * from rectify_item where rectify_id = ?';
        $sql_3 = 'select * from store_product where store_code = ?';

        $result_1 = $this->db->query($sql_1,$rectify_id);
        $result_2  = $this->db->query($sql_2,$rectify_id);    
        $result_3 = $this->db->query($sql_3,array($result_1->row()->store_code));

        foreach ($result_3->result() as $row_1) 
        {
            log_message('DEBUG',' korea barcode '.$row_1->product_korea_barcode);
            $found = FALSE;
            foreach ($result_2->result() as $row_2) 
            {
                if($row_2->product_korea_barcode === $row_1->product_korea_barcode)
                {
                    $found = TRUE;
                   
                }
            }
            if(!$found)
            {
                if($row_1->amount > 0)
                {
                    log_message('DEBUG','NOT FOUND ');
                    $rectify_item = new StdClass;
                    $rectify_item->rectify_id = $rectify_id;
                    $rectify_item->previous_amount = $row_1->amount;
                    $rectify_item->current_amount = 0;
                    $rectify_item->product_korea_barcode = $row_1->product_korea_barcode;
                    $this->db->insert('rectify_item',$rectify_item);
                }
            }

        }
       
    }
    public function generate_transaction($rectify_id)
    {
        $sql_1 = 'select * from rectify where id = ?';
        $sql_2 = 'select * from rectify_item where rectify_id = ?';
        $sql_3 = 'select * from store_product where store_code = ?';

        $result_1 = $this->db->query($sql_1,$rectify_id);
        $result_2  = $this->db->query($sql_2,$rectify_id);
        $stock_transaction = new StdClass;
        $stock_transaction->store_source_code = $result_1->row()->store_code ;
        $stock_transaction->register_date = $result_1->row()->register_date;
        $stock_transaction->type = 'counting';
        $this->db->insert('stock_transaction',$stock_transaction);
        $stock_transaction_id = $this->db->insert_id();
        $result_3 = $this->db->query($sql_3,array($result_1->row()->store_code));
        foreach ($result_3->result() as $row_1) 
        {
            log_message('DEBUG',' korea barcode '.$row_1->product_korea_barcode);
            $found = FALSE;
             foreach ($result_2->result() as $row_2) 
             {
                if($row_2->product_korea_barcode === $row_1->product_korea_barcode)
                {
                    $found = TRUE;
                    log_message('DEBUG','FOUND ==== product_korea_barcode'.$row_1->product_korea_barcode);
                    $diff_count = $row_2->previous_amount - $row_2->current_amount;
                    if($diff_count > 0)
                    {
                        $stock_transaction_detail = new StdClass;
                        $stock_transaction_detail->stock_transaction_id = $stock_transaction_id;
                        $stock_transaction_detail->amount = $diff_count;
                        $stock_transaction_detail->product_korea_barcode = $row_1->product_korea_barcode;
                        $this->db->insert('stock_transaction_detail',$stock_transaction_detail);
                        log_message('DEBUG',json_encode($stock_transaction_detail));
                    }
                }
            }
            if(!$found)
            {
                if($row_1->amount > 0)
                {
                    log_message('DEBUG','NOT FOUND ');
                    $stock_transaction_detail = new StdClass;
                    $stock_transaction_detail->stock_transaction_id = $stock_transaction_id;
                    $stock_transaction_detail->amount = $row_1->amount;
                    $stock_transaction_detail->product_korea_barcode = $row_1->product_korea_barcode;
                    $this->db->insert('stock_transaction_detail',$stock_transaction_detail);
                    log_message('DEBUG',json_encode($stock_transaction_detail));
                }
            }

        }
       
        $this->db->where('id',$rectify_id);
        $this->db->update('rectify',array('transaction_id'=>$stock_transaction_id));
        return $stock_transaction_id;
    }
    public function view_cost()
    {
        $sql = "SELECT SUM(amount * pricing.cost_baht) as cost,store.name from store_product 
                            inner join pricing 
                            on store_product.product_korea_barcode = pricing.product_korea_barcode
                            inner join store
                            on store_product.store_code = store.code
                            group by store_product.store_code 
                            ";
        return $this->db->query($sql);

    }
    public function view_summary($product_search,$store_code_search)
    {
            $sql = "SELECT *
                from store_product 
                inner join product 
                    on product.korea_barcode = store_product.product_korea_barcode
                inner join store
                    on store.code = store_product.store_code \n";
            $is_where = false;
            $param = array();
            if(!empty($product_search))
            {
                if(!$is_where)
                {
                    $sql = $sql." WHERE \n";
                    $is_where = true;
                }
                $sql = $sql."korea_barcode in ('".$product_search."')
                 OR UPPER(product_name) LIKE '%".strtoupper($product_search)."%' \n";
               // $param[] = $product_search;             
            }
            if(!empty($store_code_search))
            {
                if(!$is_where)
                {
                    $sql = $sql."WHERE \n";
                    $is_where = true;
                }else{
                    $sql = $sql."AND \n";
                }
                 $sql = $sql." store_product.store_code = ? \n";
                $param[] = $store_code_search;
            }  
            $sql = $sql."GROUP BY store_code,product_korea_barcode ORDER BY product_korea_barcode asc";

        $query = $this->db->query($sql,$param);
        log_message('debug',$this->db->last_query());
        return $query;
    }
    public function view_prepare_stock_log($stock_transaction_id)
    {
         $current_trans = $this->db->query('SELECT * FROM stock_transaction WHERE id = ?',array($stock_transaction_id));
         $current_trans_date = $current_trans->row()->register_date;
         $sql = "SELECT * FROM stock_transaction 
            LEFT JOIN store store1 on store1.code = stock_transaction.store_source_code
            LEFT JOIN store store2 on store2.code = stock_transaction.store_destination_code
            WHERE  register_date BETWEEN ? AND ? 
            AND (
                   (store_source_code = ?  AND type='preparing')
                    OR 
                   (store_destination_code = ?  AND type='done')
                )
            ORDER BY id desc";
         $relate_trans = $this->db->query($sql,array($current_trans_date,$current_trans_date,$current_trans->row()->store_source_code,$current_trans->row()->store_source_code));
         log_message('DEBUG',$this->db->last_query());
         $display_table = array();
         $sort_asc_id = array();
         if($relate_trans->num_rows() > 0)
         {

            foreach ($relate_trans->result() as $row) 
            {
                $sort_asc_id[] = $row->id;
            }
            sort($sort_asc_id);
            $idx = 0;
            foreach ($relate_trans->result() as $row) 
            {

                $relate_trans_detail = 
                $this->db->query("SELECT * FROM stock_transaction_detail LEFT JOIN product on product.korea_barcode = stock_transaction_detail.product_korea_barcode
                    WHERE stock_transaction_id = ?",array($row->id));
                foreach ($relate_trans_detail->result() as $row_detail) 
                {
                    if(isset($display_table[$row_detail->product_korea_barcode]))
                    {
                        $display_table[$row_detail->product_korea_barcode]->diff[$row->id.'']->amount = $row_detail->amount;
                        $display_table[$row_detail->product_korea_barcode]->diff[$row->id.'']->type = $row->type;
                           
                    }
                    else
                    {
                        $prepare_entry = new StdClass();
                        $prepare_entry->type = $row->type;
                        $prepare_entry->name = $row_detail->product_name;
                        $diff_entry  = new StdClass();
                        $diff_entry->amount = $row_detail->amount;
                        $diff_entry->type  = $row->type;
                        $prepare_entry->diff[$row->id.''] = $diff_entry;                      
                        $display_table[$row_detail->product_korea_barcode] = $prepare_entry;
                    }
                    if(!isset($display_table[$row_detail->product_korea_barcode]->cur))
                    {
                         $store_product_current_log = $this->db->query('SELECT * FROM store_product_log
                              WHERE product_korea_barcode = ? AND store_code = ? AND stock_transaction_id = ?'
                            ,array($row_detail->product_korea_barcode,$current_trans->row()->store_source_code,$row->id));
                     
                        if($store_product_current_log->num_rows() > 0)
                        {
                            $display_table[$row_detail->product_korea_barcode]->cur = $store_product_current_log->row()->next_amount;
                        }
                    }
                    if(!isset($display_table[$row_detail->product_korea_barcode]->log))
                    {
                        foreach ($sort_asc_id as $id) {
                        
                             $store_product_log = $this->db->query('SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = ? AND store_code = ? AND stock_transaction_id = ?'
                                ,array($row_detail->product_korea_barcode,$current_trans->row()->store_source_code, $id));
                            
                            log_message('debug',$this->db->last_query());                  
                            
                            if($store_product_log->num_rows() > 0)
                            {
                                $display_table[$row_detail->product_korea_barcode]->log = $store_product_log->row()->amount;       
                                break;       
                            }
                        }   
                    }

                }
                 //   $idx++;
            }
         }   
         $display_table['relate'] = $relate_trans;
         return $display_table;
    }
  public function view_sent_stock_log($stock_transaction_id)
    {
         $current_trans = $this->db->query('SELECT * FROM stock_transaction WHERE id = ?',array($stock_transaction_id));
         $current_trans_date = $current_trans->row()->register_date;
         $sql = "SELECT * FROM stock_transaction 
            LEFT JOIN store store1 on store1.code = stock_transaction.store_source_code
            LEFT JOIN store store2 on store2.code = stock_transaction.store_destination_code
            WHERE  register_date BETWEEN ? AND ? 
            AND (
                   (store_source_code = ?  AND type='preparing')
                    OR 
                   (store_destination_code = ?  AND type='done')
                )
            ORDER BY id desc";
         $relate_trans = $this->db->query($sql,array($current_trans_date,$current_trans_date,$current_trans->row()->store_destination_code,$current_trans->row()->store_destination_code));
         log_message('DEBUG',$this->db->last_query());
         $display_table = array();
         $sort_asc_id = array();
         if($relate_trans->num_rows() > 0)
         {

            foreach ($relate_trans->result() as $row) 
            {
                $sort_asc_id[] = $row->id;
            }
            sort($sort_asc_id);
            $idx = 0;
            log_message('DEBUG',json_encode($sort_asc_id));
            foreach ($relate_trans->result() as $row) 
            {

                $relate_trans_detail = 
                $this->db->query("SELECT * FROM stock_transaction_detail LEFT JOIN product on product.korea_barcode = stock_transaction_detail.product_korea_barcode
                    WHERE stock_transaction_id = ?",array($row->id));
                foreach ($relate_trans_detail->result() as $row_detail) 
                {
                    if(isset($display_table[$row_detail->product_korea_barcode]))
                    {
                        $display_table[$row_detail->product_korea_barcode]->diff[$row->id.'']->amount = $row_detail->amount;
                        $display_table[$row_detail->product_korea_barcode]->diff[$row->id.'']->type = $row->type;
                           
                    }
                    else
                    {
                        $prepare_entry = new StdClass();
                        $prepare_entry->type = $row->type;
                        $prepare_entry->name = $row_detail->product_name;
                        $diff_entry  = new StdClass();
                        $diff_entry->amount = $row_detail->amount;
                        $diff_entry->type  = $row->type;
                        $prepare_entry->diff[$row->id.''] = $diff_entry;                      
                        $display_table[$row_detail->product_korea_barcode] = $prepare_entry;
                    }
                    if(!isset($display_table[$row_detail->product_korea_barcode]->cur))
                    {

                        log_message('DEBUG','current trans id  = '.$row->id);
                           log_message('DEBUG',$row_detail->product_korea_barcode.' : ');
                         $store_product_current_log = $this->db->query('SELECT * FROM store_product_log
                              WHERE product_korea_barcode = ? AND store_code = ? AND stock_transaction_id = ?'
                            ,array($row_detail->product_korea_barcode,$current_trans->row()->store_destination_code,$row->id));
                     
                        if($store_product_current_log->num_rows() > 0)
                        {

                           log_message('DEBUG',$row_detail->product_korea_barcode.' : '. $store_product_current_log->row()->next_amount);
                            log_message('DEBUG','FOUND');
                            $display_table[$row_detail->product_korea_barcode]->cur = $store_product_current_log->row()->next_amount;
                        }
                        log_message('DEBUG',$this->db->last_query());
                    }
                    if(!isset($display_table[$row_detail->product_korea_barcode]->log))
                    {
                        foreach ($sort_asc_id as $id) {
                            log_message('DEBUG','current trans id  = '.$id);
                             $store_product_log = $this->db->query('SELECT * FROM store_product_log
                                 WHERE product_korea_barcode = ? AND store_code = ? AND stock_transaction_id = ?'
                                ,array($row_detail->product_korea_barcode,$current_trans->row()->store_destination_code, $id));
                            
                            log_message('debug',$this->db->last_query());                  
                            if($store_product_log->num_rows() > 0)
                            {
                                log_message('DEBUG','FOUND');
                                $display_table[$row_detail->product_korea_barcode]->log = $store_product_log->row()->amount;
                                break;              
                            }

                        }
                    }

                }
                   // $idx++;
            }
         }   
         $display_table['relate'] = $relate_trans;
         return $display_table;
    }   
    // public function view_stock_log($stock_transaction_id)
    // {
    //     $korea_barcode_criteria = '';
    //     $sql1 = 'SELECT * FROM stock_transaction WHERE id = ?';
    //     $sql2 = 'SELECT * FROM stock_transaction_detail  left join product on product.korea_barcode = stock_transaction_detail.product_korea_barcode WHERE stock_transaction_id = ? ';
        
    //     $query = $this->db->query($sql1,array($stock_transaction_id));
    //     $query_detail = $this->db->query($sql2,array($stock_transaction_id));
    
    //     foreach ($query_detail->result() as $row) {
    //         $korea_barcode_criteria[]= $row->product_korea_barcode;
    //     }
    //     $korea_barcode_criteria = implode(',',$korea_barcode_criteria);
    //     $sql3 = 'SELECT *,store1.short_name as source_name,store2.short_name as destination_name 
    //     FROM stock_transaction 
    //     left join store  as store1 on store1.code = stock_transaction.store_source_code 
    //     left join store as store2 on store2.code = stock_transaction.store_destination_code 
    //     inner join stock_transaction_detail on stock_transaction_detail.stock_transaction_id = stock_transaction.id
    //     WHERE  register_date between ? and ?
    //     AND stock_transaction_detail.product_korea_barcode IN ('.$korea_barcode_criteria.')
    //     AND (
    //     (store_source_code = ?  AND type IN("preparing","done") ) 
    //         OR (store_destination_code = ? AND type="done" )
    //         OR (store_source_code = ? AND store_destination_code is null AND type = "done")
    //     ) 
        
    //     GROUP BY stock_transaction_id HAVING COUNT(amount) > 0  ORDER BY id desc limit 5';

        // $query_history = '';
        // $query_log = '';
        // $last_id = '';
        // $this->db->escape_str($korea_barcode_criteria);
        // if($query->row()->type === 'done')
        // {
        //     //deliveried
        //     $query_history = $this->db->query($sql3,array($query->row()->register_date,$query->row()->register_date,$query->row()->store_destination_code,$query->row()->store_destination_code,$query->row()->store_source_code));
        // }
        // else
        // {
        //     //prepared
        //     $query_history = $this->db->query($sql3,array($query->row()->register_date,$query->row()->register_date,$query->row()->store_source_code,$query->row()->store_source_code,$query->row()->store_source_code));
        // }
        // log_message('DEBUG',' query history '.$this->db->last_query());
        // if($query_detail->num_rows() > 0)
        // {
        //     $count = 0 ;
        //     $summaryObject = array();
        //     $id_group = array();
        //     foreach ($query_detail->result() as $row) 
        //     {
        //         foreach ($query_history->result() as $row2) 
        //         {
        //             $id_group[] = $row2->id;
        //             $count++;
        //             $sql4 = 'SELECT * FROM stock_transaction_detail WHERE stock_transaction_id = ? and product_korea_barcode = ?';
        //             $query_cut_detail =  $this->db->query($sql4, array($row2->id,$row->product_korea_barcode));
        //             if($query_cut_detail->num_rows() > 0)
        //             {
        //                 $summaryObject[$row->product_korea_barcode][$row2->id] = $query_cut_detail->row()->amount;
        //             }
        //             else
        //             {
        //                 $summaryObject[$row->product_korea_barcode][$row2->id] = 0;
        //             }
        //             if($query_history->num_rows() == $count)
        //             {
        //                 $last_id = $row2->id;
        //             }
        //         }
        //         //balance summary
        //         $sql_store = 'SELECT * FROM store_product left join store on store_product.store_code = store.code WHERE   store_code = ? and product_korea_barcode = ?';
        //         $query_store = '';
        //         if($query->row()->type === 'done')
        //         {

        //           $query_store = $this->db->query($sql_store,array($query->row()->store_destination_code,$row->product_korea_barcode));
        //           if($query_store->num_rows() <= 0)
        //           {
        //             $query_store = $this->db->query($sql_store,array($query->row()->store_source_code,$row->product_korea_barcode));
        //           }
        //         }
        //         else
        //         {

        //            $query_store = $this->db->query($sql_store,array($query->row()->store_source_code,$row->product_korea_barcode));
        //         }

        //         log_message('DEBUG','query balance log'.$this->db->last_query());
        //         $summaryObject['balance'][$row->product_korea_barcode] = $query_store->row()->amount;
        //         $summaryObject['balance']['store_name'] = $query_store->row()->name;
        //         //log summary 
        //         $sql5  = 'SELECT * FROM store_product_log WHERE  stock_transaction_id IN ('.implode(',',$id_group).') AND store_code = ? AND product_korea_barcode = ?   order by ID asc';
        //         if($query->row()->type === 'done')
        //         {

        //           $query_log = $this->db->query($sql5,array($query->row()->store_destination_code,$row->product_korea_barcode));
        //           if($query_log->num_rows() <= 0)
        //           {
        //             $query_log = $this->db->query($sql5,array($query->row()->store_source_code,$row->product_korea_barcode));
        //           }
        //         }
        //         else
        //         {

        //            $query_log = $this->db->query($sql5,array($query->row()->store_source_code,$row->product_korea_barcode,$query->row()->register_date));
        //         }
        //         log_message('DEBUG','query log'.$this->db->last_query());
                
        //         if($query_log->num_rows() > 0)
        //         {
        //             $summaryObject['log'][$row->product_korea_barcode] = $query_log->row()->amount;
        //         }
        //         else
        //         {
        //             $summaryObject['log'][$row->product_korea_barcode] = 0;   
        //         }
        //     }
        //     $summaryObject['product_list'] = $query_detail;
        //     $summaryObject['transaction_list'] = $query_history;
        //     $summaryObject['current'] = $query;
        //     return $summaryObject;
        // }
}