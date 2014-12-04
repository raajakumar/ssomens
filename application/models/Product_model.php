<?php
class Product_model extends CI_Model
{
    public function save()
    {
        $data = array( 'PRODUCT_ID' => $this->input->post('tb_product_id'),
            'PRODUCT_NAME' => $this->input->post('tb_product_name'),
            'PRODUCT_PRICE' => $this->input->post('tb_product_price'),
            'PRODUCT_DESCRIPTION' => $this->input->post('tb_product_description'),
            'PRODUCT_TOTAL_STOCK' => $this->input->post('tb_product_total_stock'),
            'PRODUCT_REMARKS' => $this->input->post('tb_product_remarks'));
             $this->db->insert('product_details',$data);
             echo "data to be inserted";
             
    }
    function getProduct_id()
    {
        $sql = "CALL SP_MK_HW_AUTOGENERATE_CODE(2,@CODE)";
        $this->db->query($sql);
        $this->db->select('@CODE AS code',FALSE);
        $result = $this->db->get()->result_array();
        return $result;
    }
}

?>

