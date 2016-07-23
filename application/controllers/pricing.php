<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pricing extends MY_Controller {

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
	public function all()
	{
		$this->load->model('pricing_model');
		$query = $this->pricing_model->viewall();
		$page_data['query_pricing_list'] = $query;
		$this->loadView('pricing/pricing_list',$page_data);
	}
	public function export()
	{
		 $this->load->library('excel');
		 $objPHPExcel = new PHPExcel();
		// Set properties
		$objPHPExcel->getProperties()->setTitle("Pricing");
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'product image');
		$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'korea barcode');
		$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'product name');
		$objPHPExcel->getActiveSheet()->SetCellValue('D1', 'korea retial (won)');
		$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'cost_baht');
		$objPHPExcel->getActiveSheet()->SetCellValue('F1', 'MT Price');
		$this->load->model('pricing_model');
		$query = $this->pricing_model->viewall();
		$rowcount = 1;
		foreach ($query->result() as $row) {
			$rowcount++ ;
			if(isset($row->file_name)){
				$gdImage = imagecreatefrompng(FCPATH.'assets/uploads/'.$row->file_name);
				// Add a drawing to the worksheetecho date('H:i:s') . " Add a drawing to the worksheet\n";
				$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
				$objDrawing->setName($row->file_name);
				$objDrawing->setDescription($row->product_name);
				$objDrawing->setImageResource($gdImage);
				$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_PNG);
				$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
    			  $objDrawing->setOffsetY(5); 
    			  $objDrawing->setOffsetX(5);
    			  $objDrawing->setWidthAndHeight(120,120);
				 $objDrawing->setResizeProportional(true);
				// $objDrawing->setWidth(130);
				$objDrawing->setCoordinates('A'.$rowcount);
				$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
			}

			$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowcount,$row->product_korea_barcode);
			$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowcount,$row->product_name);
			$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowcount,$row->korea_retail);
			$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowcount,$row->cost_baht);
			$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowcount,$row->mt_price);

		    $objPHPExcel->getActiveSheet()
			    ->getRowDimension($rowcount)
			    ->setRowHeight(100);
		}
		// foreach($objPHPExcel->getActiveSheet()->getRowDimensions() as $rd) { 
		//     $rd->setRowHeight(120); 
		// }
		for($col = 'A'; $col !== 'F'; $col++) {
		    $objPHPExcel->getActiveSheet()
		        ->getColumnDimension($col)
		        ->setAutosize(true);
		}
		//korea retial (won)	price for stockist	Cost (Baht)	MT Price
		$range = 'B1:'.'B'.$rowcount;
			$objPHPExcel->getActiveSheet()
			    ->getStyle($range)
			    ->getNumberFormat()
			    ->setFormatCode( PHPExcel_Style_NumberFormat::FORMAT_NUMBER );
		$objPHPExcel->getActiveSheet()->setTitle('Pricing');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");
		//$objWriter->save("pricing.xlsx");
				// We'll be outputting an excel file
		header('Content-type: application/vnd.ms-excel');

		// It will be called file.xls
		header('Content-Disposition: attachment; filename="pricing.xlsx"');

		// Write file to the browser
		$objWriter->save('php://output');
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
				if ( ! $this->upload->do_upload('pricing_excel'))
				{
					$error = array('errors' => $this->upload->display_errors());
					$this->loadView('pricing/pricing_import',$error);
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
					$this->load->model('pricing_model');
					
					for ($row = 2; $row <= $highestRow; ++$row) {

					    $korea_barcode = $objWorksheet->getCellByColumnAndRow(2, $row)
					                 ->getFormattedValue() ;        
					    //for ($col = 0; $col <= $highestColumnIndex; ++$col) {
					    $korea_retail  = $objWorksheet->getCellByColumnAndRow(4, $row)
					                 ->getFormattedValue() ; 
					    $price_for_stockist = $objWorksheet->getCellByColumnAndRow(5, $row)
					                 ->getFormattedValue() ;        
					    $cost_baht =  $objWorksheet->getCellByColumnAndRow(6, $row)
					                 ->getFormattedValue() ; 

					    $mt_price =  $objWorksheet->getCellByColumnAndRow(7, $row)
					                 ->getFormattedValue() ;

					    $normal_promotion =  $objWorksheet->getCellByColumnAndRow(8, $row)
					                 ->getFormattedValue();
					    $big_sale =  $objWorksheet->getCellByColumnAndRow(9, $row)
					                 ->getFormattedValue();       
					    $other_field_name_1 =  $objWorksheet->getCellByColumnAndRow(10, $row)
					                 ->getFormattedValue();                      
					   // }
					   if(!empty($korea_barcode))
					   {
						    $data = array('product_korea_barcode'=>$korea_barcode,'korea_retail'=>$korea_retail,'price_for_stockist'=>$price_for_stockist,'cost_baht'=>$cost_baht,'mt_price'=>$mt_price,'normal_promotion'=>$normal_promotion,'big_sale'=>$big_sale,'other_field_name_1'=>$other_field_name_1);
							$query = $this->pricing_model->findbybarcode($korea_barcode);
							if($query->num_rows() > 0)
							{
								unset($data['product_korea_barcode']);
								$this->pricing_model->update_pricing($data, $query->row()->id);
							}else{
								$this->pricing_model->insert_pricing($data);					
							}
						}	    
					}
					redirect('pricing/all');
				}
			
		}
		$this->loadView('pricing/pricing_import');	
	}
	public function upload_picture()
    {
        $korea_barcode = $this->input->post('korea_barcode');
        $config['upload_path'] =  FCPATH .'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->load->model('product_model');

        if (!$this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            $this->loadView('pricing/pricing_upload', $error);
        }
        else
        {
//            $data = array('upload_data' => $this->upload->data());
        	$upload_data = $this->upload->data();
        	$data = array('image_path'=>$upload_data['full_path'],'file_name'=>$upload_data['file_name']);
			$this->product_model->update_product($data, $korea_barcode);

            redirect('pricing/all','refresh');
        }
    }
    public function upload_form($korea_barcode)
    {
    	$data['korea_barcode'] = $korea_barcode;
    	$this->load->model('product_model');
    	$result = $this->product_model->find_by_koreabar($korea_barcode);
    	$data['product_name'] = $result->row()->product_name;
    	$this->loadView('pricing/pricing_upload',$data);

    }
	public function edit($pricing_id = '')
	{
	        $data['js'] = array('common');
			$this->loadView('pricing/pricing_edit',$data);
	}
	public function save()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$this->load->model('pricing_model');
			$this->load->model('product_model');
			$data = $this->input->post('data');
			log_message('debug','PRICING DATA'. (int)$_SERVER['CONTENT_LENGTH']);
			$result = '';
			if($data)
			{
				$pricings = array();
				foreach ($data as $pricing) {
					if(!empty($pricing['id']) && !empty($pricing['product_korea_barcode']))
					{
						$array_result = array('mt_price'=>$pricing['mt_price']
							,'cost_baht'=>$pricing['cost_baht']
							,'korea_retail'=>$pricing['korea_retail']
							,'price_for_stockist'=>$pricing['price_for_stockist']);
						$result = $this->pricing_model->update_pricing($array_result,$pricing['id']);
						$this->product_model->update_product(array('product_name'=>$pricing['product_name']),$pricing['product_korea_barcode']);
							
					}
					else
					{
						if(!empty($pricing['product_korea_barcode']))
						{ 
							$result_product = $this->product_model->find_by_koreabar($pricing['product_korea_barcode']);
							if($result_product->num_rows() <= 0)
							{
								$productModel = new StdClass;
								$productModel->korea_barcode  = $pricing['product_korea_barcode'];
								$productModel->product_name  = $pricing['product_name'];
								$this->product_model->insert_product($productModel);
							}
							else
							{	
								$this->product_model->update_product(array('product_name'=>$pricing['product_name']),$pricing['product_korea_barcode']);
							}
							$result_pricing = $this->pricing_model->find_by_kbarcode($pricing['product_korea_barcode']);
							if($result_pricing->num_rows() <= 0)
							{
								$pricingModel = new StdClass;
								$pricingModel->product_korea_barcode = $pricing['product_korea_barcode'];
								$pricingModel->mt_price = $pricing['mt_price'];
								$pricingModel->cost_baht = $pricing['cost_baht'];
								$pricingModel->korea_retail = $pricing['korea_retail'];
								$pricingModel->price_for_stockist = $pricing['price_for_stockist'];
								$result =  $this->pricing_model->insert_pricing($pricingModel);
							}
						}
					}		
					if($result!== TRUE)
					{
						break;
					}		
				}

			}
            if(empty($result) || $result === TRUE)
            {
    			$this->output
    		    ->set_content_type('application/json')
    		    ->set_output(json_encode(array('result'=> 'ok')));
			}
            else
            {
                    $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('result'=> 'error','msg'=>$result['msg'])));

            }
		}
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */