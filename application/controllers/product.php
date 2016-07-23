<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('base_site');
	}
	public function import()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{

			log_message('debug','---import---');
			$config['upload_path'] = 'uploads/data/';
			$config['allowed_types'] = 'xls|xlsx';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
				log_message('debug','---2---');
				ini_set('upload_max_filesize','20M'); 
				if ( ! $this->upload->do_upload('product_excel'))
				{
					$error = array('errors' => $this->upload->display_errors());
					$this->loadView('product/product_import',$error);
				}
				else
				{ 
					log_message('debug','---SAVE OK ---');
				    $upload_data = $this->upload->data();
				    $full_path = $upload_data['full_path'];
				    $this->load->library('excel');
				    /**  Identify the type of $inputFileName  **/
					$inputFileType = PHPExcel_IOFactory::identify($full_path);
					/**  Create a new Reader of the type that has been identified  **/
					$objReader = PHPExcel_IOFactory::createReader($inputFileType);
					/**  Load $inputFileName to a PHPExcel Object  **/
					$objPHPExcel = $objReader->load($full_path);

				    
					$objWorksheet = $objPHPExcel->getActiveSheet();
					// Get the highest row and column numbers referenced in the worksheet
					$highestRow = $objWorksheet->getHighestRow(); // e.g. 10
					$highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
					$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5
					$this->load->model('product_model');
					
					for ($row = 2; $row <= $highestRow; ++$row) {
					    //for ($col = 0; $col <= $highestColumnIndex; ++$col) {
					    $thai_barcode  = $objWorksheet->getCellByColumnAndRow(1, $row)
					                 ->getFormattedValue() ; 
					    $korea_barcode = $objWorksheet->getCellByColumnAndRow(2, $row)
					                 ->getFormattedValue() ;        
					    $product_name =  $objWorksheet->getCellByColumnAndRow(3, $row)
					                 ->getFormattedValue() ;     
					   // }
					    if(!empty($korea_barcode))
					    {
						    $data = array('korea_barcode'=>$korea_barcode,'thai_barcode'=>$thai_barcode,'product_name'=>$product_name);
							$query = $this->product_model->findbybarcode($korea_barcode);
							if($query->num_rows() > 0)
							{
								unset($data['korea_barcode']);
								$this->product_model->update_product($data, $korea_barcode);
							}else{
								$this->product_model->insert_product($data);					
							}
						}	    
					}
					redirect('product/all');
				}
			
		}
		$this->loadView('product/product_import');	
	}
	public function all()
	{
		$this->load->model('product_model');
		$query  = $this->product_model->viewall();
		$page_data['query_product_list'] = $query;
		$this->loadView('product/product_list',$page_data);
	}
	public function edit($korea_barcode = '')
	{
		$page_data = array();
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{

			$korea_barcode = $this->input->post('korea_barcode');
			$korea_barcode_hidden = $this->input->post('korea_barcode_hidden');
			if(empty($korea_barcode_hidden))
			{

				$this->load->library('form_validation');
				$this->form_validation->set_rules('korea_barcode', 'korea_barcode', 'korea_barcode');
			}
			$product['thai_barcode'] = $this->input->post('thai_barcode');
			$product['product_name'] = $this->input->post('product_name');

			$config['upload_path'] = 'uploads/product/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);
			if( !empty($_FILES['icon_image']['tmp_name'])) {
				if ( ! $this->upload->do_upload('icon_image'))
				{
					$error = array('product/product_edit' => $this->upload->display_errors());
					$this->load->view('product/product_edit', $error);
				}
				else
				{ 
				    $upload_data = $this->upload->data();
				    $file_name = $upload_data['file_name'];
				    
				    $url = 'uploads/product/'.$file_name;
				    $product['icon_image_url'] = $url;
				}
			}
			$this->load->model('product_model');
			if(!empty($korea_barcode))
			{
				$product['korea_barcode'] = $korea_barcode;
				$this->product_model->insert_product($product);
			}
			else
			{
				$this->product_model->update_product($product,$korea_barcode_hidden);
			}
			redirect('product/all');
		}
		else
		{  	
			$page_data['korea_barcode'] = '';
			$page_data['thai_barcode'] = '';
			$page_data['product_name'] = '';
			if(!empty($korea_barcode))
			{
				$this->load->model('product_model');
				$query = $this->product_model->findbybarcode($korea_barcode);
				$page_data['korea_barcode'] = $query->row()->korea_barcode;
				$page_data['thai_barcode'] = $query->row()->thai_barcode;
				$page_data['product_name'] = $query->row()->product_name;
			} 
				$this->loadView('product/product_edit',$page_data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */