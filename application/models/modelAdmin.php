<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelAdmin extends CI_Model {

    public function getAllAdmin()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $query = $this->db->get();
        return $query->result();
    }

    public function addAdmin($data)
    {
        $this->db->insert('admin', $data);
    }

    public function getAdminByUsername($username)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->row();
    }

    public function updateAdmin($username, $data)
    {
        $this->db->where('username', $username);
        $this->db->update('admin', $data);
    }

    public function deleteAdmin($username)
    {
        $this->db->where('username', $username);
        $this->db->delete('admin');
    }


}