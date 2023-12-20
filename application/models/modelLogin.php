<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelLogin extends CI_Model {

    public function login($username, $password)
    {
        //verify with object
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username); //select where username
        $this->db->where('password', $password); //select where password
        $this->db->limit(1); //limit 1 row
        $query = $this->db->get(); //get data

        if($query->num_rows() == 1) //if data exist
        {
            return $query->result(); //return data
        }
        else
        {
            return false; //return false
        }
    }

    public function protectVerifyLoginAdminController()
    {
        if($this->session->userdata('logged_in') == FALSE && $this->session->userdata('logged_in')['username'] == NULL){
            redirect('login');
        }
    }

}