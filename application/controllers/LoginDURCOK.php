<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginDURCOK extends CI_Controller {

    //construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelLogin');
    }

	public function index()
    {
        $this->load->view('viewLogin');
    }

    public function loginVerification()
    {
        $username = $this->form_validation->set_rules('username', 'Username', 'required');
        $password = $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error', 'Username atau Password tidak boleh kosong');
            redirect('login');
        }

        else{
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $result = $this->modelLogin->login($username, $password);

            if($result){
                $sess_array = array();
                foreach($result as $row){
                    $sess_array = array(
                        'username' => $row->username,
                        'level' => $row->level
                    );
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                redirect('dashboard');
            }
            else{
                $this->session->set_flashdata('error', 'Username atau Password salah');
                redirect('login');
            }
        }
    }

       public function dashboardDurianKocok()
    {
        $this->modelLogin->protectVerifyLoginAdminController();

        #getAllModel
        $this->load->model('modelProduct');
        $this->load->model('modelContact');
        $this->load->model('modelPesanan');
        $this->load->model('modelAdmin');

        $getAllProduct = $this->modelProduct->getAllProduct();
        $getContact = $this->modelContact->getContactbyID(1);
        $getAllPesanan = $this->modelPesanan->getAllPesanan();
        $getAllAdmin = $this->modelAdmin->getAllAdmin();
        $getMonthlyOrders = $this->modelPesanan->getMonthlyOrders();

        $data = array(
            'title' => 'Dashboard',
            'getAllProduct' => $getAllProduct,
            'countProduct' => count($getAllProduct),
            'getContact' => $getContact,
            'countContact' => is_countable($getContact) ? count($getContact) : 1,
            'countPesanan' => count($getAllPesanan),
            'countAdmin' => count($getAllAdmin),
            'monthlyOrders' => $getMonthlyOrders
        );
        $this->load->view('Admin/viewDashboard', $data);
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }

}