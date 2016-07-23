<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Stock_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    private function checkDbError(){
            if(mysql_errno() !== 0) throw new DbException();
            else return false;
    }
  
    public function viewall()
    {
        return $this->db->query('SELECT 
            stock_transaction.type
            ,stock_transaction.store_source_code
            ,stock_transaction.store_destination_code
            ,stock_transaction.register_date as register_date 
            ,stock_transaction.ref_invoice_no as ref_invoice_no
            ,stock_transaction.id as id
            ,store1.name as source_name
            ,store2.name as destination_name FROM stock_transaction 
            LEFT JOIN store  as store1 
                ON store1.code = stock_transaction.store_source_code 
                LEFT JOIN store as store2 on store2.code = stock_transaction.store_destination_code ORDER BY id DESC');
    }
    public function find_transaction_by_id($transaction_id)
    {
        $sql = "SELECT *
        ,store1.short_name as source_name
        ,store2.short_name as destination_name 
        FROM stock_transaction LEFT JOIN  store store1 on store1.code = store_source_code LEFT JOIN store store2 on store2.code = store_destination_code where id = ?";
        $query = $this->db->query($sql,$transaction_id);
        return $query;
    }
    public function find_transaction_detail_by_transaction_id($transaction_id)
    {
        $sql_stock = "SELECT * FROM stock_transaction where id = ?";
        $query_stock = $this->db->query($sql_stock,$transaction_id);
        $store_code = $query_stock->row()->store_source_code;
        $sql = "SELECT *,store_product.amount as previous_amount,stock_transaction_detail.amount as cur_amount FROM product 
        LEFT JOIN stock_transaction_detail on stock_transaction_detail.product_korea_barcode = product.korea_barcode 
        LEFT JOIN store_product on store_product.product_korea_barcode = stock_transaction_detail.product_korea_barcode
        AND store_product.store_code = ?
        WHERE stock_transaction_id = ?";
        $query = $this->db->query($sql,array($store_code,$transaction_id));
        log_message('DEBUG',$this->db->last_query());
        return $query;   
    }
    public function insert_transaction($data)
    {
    	if($this->db->insert('stock_transaction',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_transaction($data,$transaction_id)
    {
        $this->db->where('id',$transaction_id);
        if($this->db->update('stock_transaction',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function delete_transaction($transaction_id)
    {
        $this->db->where('stock_transaction_id',$transaction_id);
        $this->db->delete('stock_transaction_detail');
        $this->db->where('id',$transaction_id);
        $this->db->delete('stock_transaction');
    }
    public function cut_stock($stock_transaction_id)
    {
        $sql_stock = "select * from stock_transaction where id = ?";
        $query_stock = $this->db->query($sql_stock,$stock_transaction_id);
        $sql_stock_detail = "select * from stock_transaction_detail where stock_transaction_id = ?";
        $query_stock_detail = $this->db->query($sql_stock_detail,$stock_transaction_id);
        $type = '';
        $result = true;
           
        if(!empty($query_stock->row()->store_destination_code) 
            && $query_stock->row()->type === 'preparing')
        {
            if($query_stock_detail->num_rows() > 0)
            {
                foreach ($query_stock_detail->result() as $row) {
                    $store_product_log = new stdClass;
                    $query_store_product =  $this->db->query('SELECT * FROM store_product 
                        WHERE store_product.product_korea_barcode = ? and store_product.store_code = ?'
                        ,array($row->product_korea_barcode
                        ,$query_stock->row()->store_destination_code));

                    if($query_store_product->num_rows() > 0)
                    {
                        $store_product = $query_store_product->row();
                        $amount = $store_product->amount + $row->amount;
                        $store_product_log->amount = $store_product->amount;
                        $store_product_log->store_code  = $store_product->store_code;
                        $store_product_log->product_korea_barcode = $store_product->product_korea_barcode;
                        $store_product_log->next_amount = $amount;
                        log_message('DEBUG','amount======>'.$amount);
                        $this->db->where('store_code',$store_product->store_code);
                        $this->db->where('product_korea_barcode',$store_product->product_korea_barcode);
                        $result = $this->db->update('store_product',array('amount'=>$amount));
                        if(!$result)
                        {
                            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                            $msg = $this->db->_error_message();
                            $num = $this->db->_error_number();

                            $data['msg'] = "Error(".$num.") ".$msg;
                            return $data;
                        }
                    }
                    else
                    {

                        $store_product = new stdClass ;
                        $store_product->product_korea_barcode = $row->product_korea_barcode;
                        $store_product->store_code = $query_stock->row()->store_destination_code;
                        $store_product->amount = $row->amount;
                        $store_product_log->amount = 0;
                        $store_product_log->next_amount= $row->amount;
                        $store_product_log->store_code  = $store_product->store_code;
                        $store_product_log->product_korea_barcode = $store_product->product_korea_barcode;
                        $result = $this->db->insert('store_product',$store_product);
                        if(!$result)
                        {
                            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                            $msg = $this->db->_error_message();
                            $num = $this->db->_error_number();

                            $data['msg'] = "Error(".$num.") ".$msg;
                            return $data;
                        }
                    }
                    $store_product_log->stock_transaction_id  = $stock_transaction_id;
                    $store_product_log->create_date = date('Y-m-d h:m:s');
                    $this->db->insert('store_product_log',$store_product_log);

                }
            } 
            $type = 'done';   
        }
        else  if(!empty($query_stock->row()->store_source_code) && $query_stock->row()->type === 'counting')
        {
            if($query_stock_detail->num_rows() > 0)
            {
                foreach ($query_stock_detail->result() as $row) {
                    $store_product_log = new stdClass;
                       $query_store_product =  $this->db->query('SELECT * FROM store_product 
                        WHERE store_product.product_korea_barcode = ? and store_product.store_code = ?'
                        ,array($row->product_korea_barcode
                        ,$query_stock->row()->store_source_code));
                    if($query_store_product->num_rows() > 0)
                    {
                        $store_product = $query_store_product->row();
                        $amount = $store_product->amount - $row->amount;
                        $store_product_log->amount = $store_product->amount;
                        $store_product_log->next_amount = $amount;
                        $store_product_log->store_code  = $store_product->store_code;
                        $store_product_log->product_korea_barcode = $store_product->product_korea_barcode; 
                        $this->db->where('store_code',$store_product->store_code);
                        $this->db->where('product_korea_barcode',$store_product->product_korea_barcode);
                        $result = $this->db->update('store_product',array('amount'=>$amount));
                        if(!$result)
                        {
                            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                            $msg = $this->db->_error_message();
                            $num = $this->db->_error_number();

                            $data['msg'] = "Error(".$num.") ".$msg;
                            return $data;
                        }
                        log_message('DEBUG',$this->db->last_query());
                    }
                    else
                    {

                        $store_product = new stdClass ;
                        $store_product->product_korea_barcode = $row->product_korea_barcode;
                        $store_product->amount = $row->amount;
                        $store_product->store_code = $query_stock->row()->store_source_code;
                        $store_product_log->amount = 0;
                        $store_product_log->next_amount = $row->amount;
                        $store_product_log->store_code  = $store_product->store_code;
                        $store_product_log->product_korea_barcode = $store_product->product_korea_barcode;
                        log_message('DEBUG','STORE PRODUCT'.json_encode($store_product));
                        $result = $this->db->insert('store_product',$store_product);
                        if(!$result)
                        {
                            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                            $msg = $this->db->_error_message();
                            $num = $this->db->_error_number();

                            $data['msg'] = "Error(".$num.") ".$msg;
                            return $data;
                        }
                    }
                    $store_product_log->stock_transaction_id  = $stock_transaction_id;
                    $store_product_log->create_date = date('Y-m-d h:m:s');
                    $this->db->insert('store_product_log',$store_product_log);
                }
            }
            $type = 'done';
        }
        else  if(!empty($query_stock->row()->store_source_code) && empty($query_stock->row()->type))
        {
            if($query_stock_detail->num_rows() > 0)
            {
                foreach ($query_stock_detail->result() as $row) {
                    $store_product_log = new stdClass;                    
                    $query_store_product =  $this->db->query('SELECT * FROM store_product 
                        WHERE store_product.product_korea_barcode = ? and store_product.store_code = ?'
                        ,array($row->product_korea_barcode
                        ,$query_stock->row()->store_source_code));
                    if($query_store_product->num_rows() > 0)
                    {
                        $store_product = $query_store_product->row();
                        $amount = $store_product->amount - $row->amount;
                        $store_product_log->amount = $store_product->amount;
                        $store_product_log->next_amount = $amount;
                        $store_product_log->store_code  = $store_product->store_code;
                        $store_product_log->product_korea_barcode = $store_product->product_korea_barcode;
                        $this->db->where('store_code',$store_product->store_code);
                        $this->db->where('product_korea_barcode',$store_product->product_korea_barcode);
                        $result = $this->db->update('store_product',array('amount'=>$amount));
                        if(!$result)
                        {
                            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                            $msg = $this->db->_error_message();
                            $num = $this->db->_error_number();

                            $data['msg'] = "Error(".$num.") ".$msg;
                            return $data;
                        }
                        log_message('DEBUG',$this->db->last_query());
                    }
                    else
                    {
                        $store_product = new stdClass ;
                        $store_product->product_korea_barcode = $row->product_korea_barcode;
                        $store_product->amount = $row->amount * -1;
                        $store_product->store_code = $query_stock->row()->store_source_code;
                        $store_product_log->amount = 0;
                        $store_product_log->next_amount = $row->amount;
                        $store_product_log->store_code  = $store_product->store_code;
                        $store_product_log->product_korea_barcode = $store_product->product_korea_barcode;
                        log_message('DEBUG','STORE PRODUCT'.json_encode($store_product));
                        $result = $this->db->insert('store_product',$store_product);
                        if(!$result)
                        {
                            log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
                            $msg = $this->db->_error_message();
                            $num = $this->db->_error_number();

                            $data['msg'] = "Error(".$num.") ".$msg;
                            return $data;
                        }
                    }

                    $store_product_log->stock_transaction_id  = $stock_transaction_id;
                    $store_product_log->create_date = date('Y-m-d h:m:s');
                    $this->db->insert('store_product_log',$store_product_log);
                }
            }
            $type = 'preparing';
        }
       $this->db->where('id',$stock_transaction_id);
       $result = $this->db->update('stock_transaction',array('type'=>$type));
       return $result;
    }
    public function update_transaction_detail($datas,$transaction_id)
    {
        $this->db->trans_start();
        $data = array();
        $this->db->where('stock_transaction_id',$transaction_id);
        $this->db->delete('stock_transaction_detail');
        if(!empty($datas))
        {
            foreach ($datas as $row) {
                $result = $this->db->query('select * from stock_transaction_detail where stock_transaction_id = ? and product_korea_barcode = ?',array($row['stock_transaction_id'],$row['product_korea_barcode']));
               
                if($result->num_rows() > 0)
                {
                    $current_amount = $result->row()->amount + $row['amount'];
                    $this->db->where('stock_transaction_id',$row['stock_transaction_id']);
                    $this->db->where('product_korea_barcode',$row['product_korea_barcode']);
                    $result = $this->db->update('stock_transaction_detail',array('amount'=>$current_amount));
                }
                else
                {
                     $result = $this->db->insert('stock_transaction_detail',$row);
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
    public function generate_transaction_from_invoice($invoice_id)
    {
        $sql  = 'SELECT * FROM invoice WHERE id = ?';
        $sql_detail =  'SELECT * FROM invoice_detail WHERE invoice_id = ?';
        $result = $this->db->query($sql,$invoice_id);
        $data = array();
        if($result->num_rows() > 0)
        {
            //generate transaction
            $stock_transaction = new stdClass;
            $stock_transaction->store_source_code = '00000';
            $stock_transaction->store_destination_code = $result->row()->store_code;
            $stock_transaction->register_date = $result->row()->create_date;
            $stock_transaction->ref_invoice_no  = $result->row()->invoice_no;
            $this->db->insert('stock_transaction',$stock_transaction);
            $stock_transaction_id = $this->db->insert_id();
            // if($stock_transaction_id && !empty($stock_transaction_id))
            // {
            $result_detail = $this->db->query($sql_detail,array($invoice_id));
            if($result_detail->num_rows() > 0)
            {
                foreach ($result_detail->result() as $row) 
                {
                    $stock_transaction_detail  = new stdClass;
                    $stock_transaction_detail->product_korea_barcode = $row->product_korea_barcode;
                    $stock_transaction_detail->stock_transaction_id = $stock_transaction_id;
                    $stock_transaction_detail->amount = $row->amount;
                    $this->db->insert('stock_transaction_detail',$stock_transaction_detail);
                }
            }
            
            //     //return error MESSAGE
            //     log_message('DEBUG',' ================== FAIL MESSAGE ================ ');
            //     $msg = $this->db->_error_message();
            //     $num = $this->db->_error_number();
            //     $data['msg'] = "Error(".$num.") ".$msg;
            //     return $data;
            // }        
        }
    }
}