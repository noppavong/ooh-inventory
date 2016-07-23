<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
 	public function loadView ($str_view, $data = '')
	{
		$content = $this->load->view($str_view, $data, true);
		$this->load->view('base_site',array('content'=>$content));
		$this->output->set_header("HTTP/1.0 200 OK");
		$this->output->set_header("HTTP/1.1 200 OK");
		//$this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', $last_update).' GMT');
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate,max-age=0");
		//$this->output->set_header("Cache-Control: public, max-age=31536000,post_check=0,pre_check=0");
		$this->output->set_header("Pragma: no-cache");

	}   
	public function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}
    public function convert($number){ 
            $txtnum1 = array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ'); 
            $txtnum2 = array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน'); 
            $number = str_replace(",","",$number); 
            $number = str_replace(" ","",$number); 
            $number = str_replace("บาท","",$number); 
            $number = explode(".",$number); 
            if(sizeof($number)>2){ 
            return 'ทศนิยมหลายตัวนะจ๊ะ'; 
            exit; 
            } 
            $strlen = strlen($number[0]); 
            $convert = ''; 
            for($i=0;$i<$strlen;$i++){ 
                $n = substr($number[0], $i,1); 
                if($n!=0){ 
                    if($i==($strlen-1) AND $n==1){ $convert .= 'เอ็ด'; } 
                    elseif($i==($strlen-2) AND $n==2){  $convert .= 'ยี่'; } 
                    elseif($i==($strlen-2) AND $n==1){ $convert .= ''; } 
                    else{ $convert .= $txtnum1[$n]; } 
                    $convert .= $txtnum2[$strlen-$i-1]; 
                } 
            } 

            $convert .= 'บาท'; 
            if($number[1]=='0' OR $number[1]=='00' OR 
            $number[1]==''){ 
            $convert .= 'ถ้วน'; 
            }else{ 
            $strlen = strlen($number[1]); 
            for($i=0;$i<$strlen;$i++){ 
            $n = substr($number[1], $i,1); 
                if($n!=0){ 
                if($i==($strlen-1) AND $n==1){$convert 
                .= 'เอ็ด';} 
                elseif($i==($strlen-2) AND 
                $n==2){$convert .= 'ยี่';} 
                elseif($i==($strlen-2) AND 
                $n==1){$convert .= '';} 
                else{ $convert .= $txtnum1[$n];} 
                $convert .= $txtnum2[$strlen-$i-1]; 
                } 
            } 
            $convert .= 'สตางค์'; 
            } 
            return $convert; 
       } 
}   
