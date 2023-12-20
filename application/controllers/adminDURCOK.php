<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminDURCOK extends CI_Controller {

    //construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelLogin');
        $this->load->model('modelAdmin');
        $this->load->library('form_validation');

        $this->modelLogin->protectVerifyLoginAdminController();

        if($this->session->userdata('logged_in')['level'] != 'superadmin'){
            echo "<script>alert('Anda tidak memiliki akses ke halaman ini');</script>";
            redirect('dashboard');
        }

    }

    public function adminDurianKocok()
    {
        $allAdmin = $this->modelAdmin->getAllAdmin();

        $data = array(
            'title' => 'Admin Durian Kocok',
            'allAdmin' => $allAdmin
        );
        $this->load->view('Admin/viewAdmin', $data);
    }

    public function addAdminDurianKocok()
    {
        $data = array(
            'title' => 'Add Admin Durian Kocok'
        );
        $this->load->view('Admin/viewAddAdmin', $data);
    }

    public function addAdminDurianKocokAction()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[12]|is_unique[admin.username]',
            array(
                'required' => 'Username harus diisi!',
                'min_length' => 'Username minimal 5 karakter!',
                'max_length' => 'Username maksimal 12 karakter!',
                'is_unique' => 'Username sudah digunakan!'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|max_length[12]',
            array(
                'required' => 'Password harus diisi!',
                'min_length' => 'Password minimal 5 karakter!',
                'max_length' => 'Password maksimal 12 karakter!'
            )
        );
        $this->form_validation->set_rules('level', 'Level', 'required|trim',
            array(
                'required' => 'Level harus diisi!'
            )
        );

        if($this->form_validation->run() == FALSE){
            $this->addAdminDurianKocok();
        }
        else{
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'level' => $this->input->post('level')
            );
            $data = $this->security->xss_clean($data);
            $this->modelAdmin->addAdmin($data);
            $this->session->set_flashdata('pesan', 'Admin berhasil ditambahkan!');
            redirect(base_url('Admin'));
        }
    }

    public function updateAdminDurianKocok($username)
    {
        $admin = $this->modelAdmin->getAdminByUsername($username);

        $data = array(
            'title' => 'Update Admin Durian Kocok',
            'admin' => $admin
        );
        $this->load->view('Admin/viewUpdateAdmin', $data);
    }

    public function updateAdminDurianKocokAction()
    {
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|max_length[12]',
            array(
                'min_length' => 'Password minimal 5 karakter!',
                'max_length' => 'Password maksimal 12 karakter!'
            )
        );
        $this->form_validation->set_rules('level', 'Level', 'required|trim',
            array(
                'required' => 'Level harus diisi!'
            )
        );

        if($this->form_validation->run() == FALSE){
            $this->updateAdminDurianKocok($this->input->post('username'));
        }
        else{
            $username = $this->input->post('username');
            $passwordOLD = $this->input->post('passwordOLD');

            // if password null
            if($this->input->post('password') == ''){
                $data = array(
                    'level' => $this->input->post('level')
                );
            }
            else{
                $data = array(
                    'password' => md5($this->input->post('password')),
                    'level' => $this->input->post('level')
                );
            }

            $data = $this->security->xss_clean($data);
            $this->modelAdmin->updateAdmin($username, $data);
            $this->session->set_flashdata('pesan', 'Admin berhasil diupdate!');
            redirect(base_url('Admin'));
        }
    }

    public function deleteAdminDurianKocok($username)
    {
        $this->modelAdmin->deleteAdmin($username);
        $this->session->set_flashdata('pesan', 'Admin berhasil dihapus!');
        redirect(base_url('Admin'));
    }

}