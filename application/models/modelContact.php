<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelContact extends CI_Model {

    public function getContactbyID($idContact)
    {
        return $this->db->get_where('contact', array('idContact' => $idContact))->row();
    }

    public function editContact($idContact, $data)
    {
        $this->db->where('idContact', $idContact);
        $this->db->update('contact', $data);
    }

}