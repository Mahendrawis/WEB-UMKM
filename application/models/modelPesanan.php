<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPesanan extends CI_Model {

    public function addPesanan($data)
    {
        $this->db->insert('pesanan', $data);
    }

    public function getAllPesanan()
    {
        $this->db->order_by('tanggalPesanan', 'DESC');
        return $this->db->get('pesanan')->result();
    }

    public function selesaikanPesanan($idPesanan, $data)
    {
        $this->db->where('idPesanan', $idPesanan);
        $this->db->update('pesanan', $data);
    }

    public function getMonthlyOrders()
    {
        // Assuming 'tanggalPesanan' is the field containing the order date in your 'pesanan' table
        $this->db->select('DATE_FORMAT(tanggalPesanan, "%Y-%m-%d") as order_date, COUNT(*) as order_count', false);
        $this->db->group_by('DATE_FORMAT(tanggalPesanan, "%Y-%m-%d")');
        $query = $this->db->get('pesanan');

        return $query->result();
    }
}
