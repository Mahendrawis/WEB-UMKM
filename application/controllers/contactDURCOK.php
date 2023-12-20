<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactDURCOK extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelLogin');
        $this->load->model('modelContact');
        $this->modelLogin->protectVerifyLoginAdminController();
    }

    public function contactDurianKocok()
    {
        $allContact = $this->modelContact->getContactbyID(1);
        $data = array(
            'title' => 'Contact Durian Kocok',
            'contact' => $allContact
        );
        $this->load->view('Admin/viewContact', $data);
    }

    public function editContactAction()
    {
        $this->form_validation->set_rules('alamatWebsite', 'Alamat Website', 'required|trim',
            array(
                'required' => 'Alamat Website harus diisi'
            )
        );
        $this->form_validation->set_rules('nomorTelepon', 'Nomor Telepon', 'required|trim|numeric|max_length[15]',
            array(
                'required' => 'Nomor Telepon harus diisi',
                'numeric' => 'Nomor Telepon harus berupa angka'
            )
        );
        $this->form_validation->set_rules('alamatLengkap', 'Alamat Lengkap', 'required|trim',
            array(
                'required' => 'Alamat Lengkap harus diisi'
            )
        );
        $this->form_validation->set_rules('alamatLive', 'Alamat Live', 'required|trim|valid_url',
            array(
                'required' => 'Alamat Live harus diisi'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            redirect(base_url('contactAdmin'));
        } else {
            $data = array(
                'alamatWebsite' => $this->input->post('alamatWebsite'),
                'nomorTelepon' => $this->input->post('nomorTelepon'),
                'alamatLengkap' => $this->input->post('alamatLengkap'),
                'alamatLive' => $this->input->post('alamatLive')
            );
            $data = $this->security->xss_clean($data);
            $this->modelContact->editContact(1, $data);
            $this->session->set_flashdata('success', 'Kontak berhasil diupdate');
            redirect(base_url('contactAdmin'));
        }
    }
}