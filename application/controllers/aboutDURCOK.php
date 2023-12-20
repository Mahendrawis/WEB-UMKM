<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutDURCOK extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelLogin');
        $this->load->model('modelContact');
        $this->modelLogin->protectVerifyLoginAdminController();
    }

    public function aboutDurianKocok()
    {
        $allContact = $this->modelContact->getContactbyID(1);
        $data = array(
            'title' => 'About Durian Kocok',
            'contact' => $allContact
        );
        $this->load->view('Admin/viewAbout', $data);
    }
    
}