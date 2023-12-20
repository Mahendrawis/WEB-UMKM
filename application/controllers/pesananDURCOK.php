<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesananDURCOK extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelPesanan');
        $this->load->model('modelLogin');
        $this->modelLogin->protectVerifyLoginAdminController();
    }

    public function pesananDurianKocok()
    {
        $getAllPesanan = $this->modelPesanan->getAllPesanan();

        $data = array(
            'title' => 'Pesanan',
            'getAllPesanan' => $getAllPesanan
        );
        $this->load->view('Admin/viewPesanan', $data);
    }

    public function selesaikanPesanan($idPesanan, $username)
    {
        $data = array(
            'statusPesanan' => 1,
            'username' => $username
        );
        $this->modelPesanan->selesaikanPesanan($idPesanan, $data);
        redirect('pesananDURCOK/pesananDurianKocok');
    }

}