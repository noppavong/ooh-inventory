<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends MY_Controller {
	
	public function all()
	{
		$this->load->model('stock_model');
		$data['query_stock_list'] = $this->stock_model->viewall();
        $data['js'] = array('common');
		$this->loadView('stock/stock_list',$data);
	}
	public function edit($stock_transaction_id = '')
	{
	    $data = $this->set_form_data($stock_transaction_id);
        $data['js'] = array('common');	
		$this->loadView('stock/stock_edit',$data);			
	}
    public function delete($stock_transaction_id = '')
    {
        $this->load->model('stock_model');
        $this->stock_model->delete_transaction($stock_transaction_id);
        redirect('stock/all','refresh');
    }
	public function view($stock_transaction_id = '')
	{
		$data = $this->set_form_data($stock_transaction_id);
        $data['js'] = array('common');
		$this->loadView('stock/stock_view',$data);			
	}    
	public function cut_stock($stock_transaction_id)
	{
		$this->load->model('stock_model');
		$result = $this->stock_model->cut_stock($stock_transaction_id);
        if($result)
        {
           redirect('stock/view_cut_log/'.$stock_transaction_id,'refresh');
        }
        else
        {
            print_r($result);
        }	
	}
    public function view_cut_log($stock_transaction_id)
    {
        $this->load->model('stock_model');
        $this->load->model('store_model');
        $trans = $this->stock_model->find_transaction_by_id($stock_transaction_id);
        if($trans->row()->type == "preparing")
        {
            $data['display_table'] = $this->store_model->view_prepare_stock_log($stock_transaction_id);
        }
        else if($trans->row()->type == "done")
        {
            $data['display_table'] = $this->store_model->view_sent_stock_log($stock_transaction_id);
        }
        $data['trans'] = $trans;
        
        $this->loadView('stock/cut_log',$data);   
    }
	public function summary()
	{
		$this->load->model('store_model');
        $this->load->model('product_model');
		$product_search = $this->input->post('product_name');
		$store_code_search = $this->input->post('store_code_search');
        $data['query_store_list'] = $this->store_model->viewall();
        if($store_code_search)
        {
            $data['query_store_criteria'] = $this->store_model->get_store($store_code_search);
        }
        else
        {
            $data['query_store_criteria'] = $this->store_model->viewall();
        }

		$query_summary = $this->store_model->view_summary($product_search,$store_code_search);
		$summary_detail  = array();
        $result_product = $this->product_model->viewall();
        $result_product_array = array();
        if($result_product->num_rows() > 0)
        {
            foreach ($result_product->result() as $row) {
                $entry = new StdClass;
                $entry->label  = $row->product_name;
                $entry->value =  $row->korea_barcode;
                $result_product_array[] = $entry;
            }
        }
		if($query_summary->num_rows() > 0)
		{
			foreach ($query_summary->result() as $row) {
				$summary_detail[$row->product_korea_barcode.''][0] = $row->product_name;
				$summary_detail[$row->product_korea_barcode.''][$row->store_code] = $row->amount;

			}
		}
		$data['store_code_display'] = $store_code_search;
		$data['summary_list'] = $summary_detail;
        $data['result_product_array'] = json_encode($result_product_array);
		$data['js'] = array('footable','footable.sort');
		$this->loadView('stock/stock_summary',$data);			
	}

	public function cost_summary()
	{

		$this->load->model('store_model');
		$query = $this->store_model->view_cost();
		$data['query_cost'] = $query;
		$this->loadView('stock/stock_cost',$data);
	}
	public function save()
	{

		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$data = $this->input->post('data');
			$store_source_code = $this->input->post('store_source_code');
			$store_destination_code = $this->input->post('store_destination_code');
			$register_date = $this->input->post('register_date');
			$stock_transaction_id = $this->input->post('stock_transaction_id');
			log_message('debug','tran id '.$stock_transaction_id);
			if($register_date)
			{
				$register_date = DateTime::createFromFormat('d/m/Y', $register_date)->format('Y-m-d');
			}
			$stock_transaction = new StdClass;
			if(!empty($store_source_code))
			{
				$stock_transaction->store_source_code = $store_source_code;
			}
			if(!empty($store_destination_code))
			{
				$stock_transaction->store_destination_code = $store_destination_code;
			}
			$stock_transaction->register_date = $register_date;
			$this->load->model('stock_model');
			if(!empty($stock_transaction_id))
			{
							log_message('debug','tran id '.$stock_transaction_id);
				$this->stock_model->update_transaction($stock_transaction,$stock_transaction_id);
			}
			else
			{			log_message('debug','tran id '.$stock_transaction_id);
				$stock_transaction_id = $this->stock_model->insert_transaction($stock_transaction);
			}
            $result = '';
			if($data)
			{
				$transaction_details = array();
				foreach ($data as $details) {
					if(!empty($details['korea_barcode']))
					{
					log_message('debug',json_encode($details));
						$transaction_details[] = array('product_korea_barcode'=>$details['korea_barcode'],'amount'=>$details['amount'],'stock_transaction_id'=>$stock_transaction_id);
					}				
				}

				if(!empty($transaction_details))
				{
					$result = $this->stock_model->update_transaction_detail($transaction_details,$stock_transaction_id);
				}
			}
            if(empty($result))
            {
    			$this->output
    		    ->set_content_type('application/json')
    		    ->set_output(json_encode(array('result'=> 'ok','transaction_id'=>$stock_transaction_id)));
			}
            else
            {
                    $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('result'=> 'error','transaction_id'=>$stock_transaction_id,'msg'=>$result['msg'])));

            }
		}
	}
    public function set_form_data($stock_transaction_id = '')
    {
        $this->load->model('product_model');
        $this->load->model('store_model');
        $this->load->model('stock_model');
        $data['query_product_list'] = $this->product_model->viewall();
        $data['query_store_list'] = $this->store_model->viewall();
        $data['store_source_code'] = '';
        $data['store_destination_code'] = '';
        $data['register_date'] = date('d/m/Y');
        $data['stock_transaction_id'] = '';
        $data['stock_transaction_detail'] = '';
        $data['type'] = '';
        if(!empty($stock_transaction_id))
        {
            $query_transaction = $this->stock_model->find_transaction_by_id($stock_transaction_id);
            $data['stock_transaction_id'] = $query_transaction->row()->id;
            $register_date = $query_transaction->row()->register_date;
            $data['register_date'] = DateTime::createFromFormat('Y-m-d H:i:s', $register_date)->format('d/m/Y');
            $data['store_source_code'] = $query_transaction->row()->store_source_code;
            $data['store_destination_code'] = $query_transaction->row()->store_destination_code;
            $data['type'] = $query_transaction->row()->type;
            $query_transaction_detail = $this->stock_model->find_transaction_detail_by_transaction_id($stock_transaction_id);
            $data['stock_transaction_detail'] = $query_transaction_detail;
        }
        return $data;
    }
}