<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Delivery extends MY_Controller {
    
    public function all($delivery_id = '')
    {
        $this->load->model('sale_model');
        $this->load->model('delivery_model');
        $data['js'] = array('common');
        $query_delivery = $this->delivery_model->viewall($delivery_id);
        $displayTable = array();
        foreach($query_delivery->result() as $row) 
        { 
            $obj = new StdClass;
            $obj->delivery = $row;
            $obj->item = $this->sale_model->find_item_by_order_id($row->order_id);
            $displayTable[] = $obj;
        }
        $data['display_delivery'] = $displayTable;
        $this->loadView('delivery/delivery_list',$data);
    }
    public function confirm_delivery()
    {
        $tracking_no = $this->input->post('tracking_no');
        $shipment_fee = $this->input->post('shipment_fee');
        $package_cost = $this->input->post('package_cost');
        $order_id = $this->input->post('order_id');
        $id = $this->input->post('delivery_id');
        $status = 'delivered';
        $data = array('tracking_no'=>$tracking_no,'shipment_fee'=>$shipment_fee,'package_cost'=>$package_cost,'status'=>$status);
        $this->load->model('delivery_model');
        $this->delivery_model->cut_stock_from_order($order_id);
        $this->delivery_model->update_delivery($data,$id);
        redirect('delivery/all','refresh');
        
    }

}
