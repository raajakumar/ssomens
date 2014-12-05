<?php
class Product_controller extends CI_Controller
{
function __construct()
{
    parent::__construct();


    $this->load->database();
    $this->load->helper('url');

}
    public function index()
    {
        $this->load->model('product_model');
        $data['product_id'] = $this->product_model->getProduct_id();
        $this->load->view("product_view",$data);
        echo "welcome";
    }
    function save()
    {
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->model('product_model');

        if($this->input->post('submit'))
        {
            $this->product_model->save();
        }


    }
}
?>
