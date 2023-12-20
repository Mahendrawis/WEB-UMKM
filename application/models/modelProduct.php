<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelProduct extends CI_Model {

    public function getAllProduct()
    {
        //return object
        return $this->db->get('product')->result();
    }

    public function addProduct($data)
    {
        $this->db->insert('product', $data);
    }

    public function getProductById($idProduct)
    {
        return $this->db->get_where('product', array('idProduct' => $idProduct))->row();
    }

    public function editProduct($idProduct, $data)
    {
        $this->db->where('idProduct', $idProduct);
        $this->db->update('product', $data);
    }

    public function deleteProduct($idProduct)
    {
        $this->db->where('idProduct', $idProduct);
        $this->db->delete('product');
    }
}