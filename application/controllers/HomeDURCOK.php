<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDURCOK extends CI_Controller {

	//construct
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelProduct');
        $this->load->model('modelContact');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('modelPesanan');
	}

	public function homeDurianKocok()
	{
		$getAllProduct = $this->modelProduct->getAllProduct();
	    $getContact = $this->modelContact->getContactbyID(1);
	    $getAllPesanan = $this->modelPesanan->getAllPesanan();

        $data = array(
		'title' => 'Home',
		'getAllProduct' => $getAllProduct,
		'countProduct' => count($getAllProduct),
		'getContact' => $getContact
		);

		$this->load->view('Home/viewHome', $data);
	}

	public function productDurianKocok()
	{
		$getAllProduct = $this->modelProduct->getAllProduct();
		$allContact = $this->modelContact->getContactbyID(1);
		$data = array(
			'title' => 'Product',
			'getAllProduct' => $getAllProduct,
			'contact' => $allContact
		);
		$this->load->view('Home/viewProduct', $data);
	}

	public function detailProduct($idProduct)
	{
		$getProductbyID = $this->modelProduct->getProductbyID($idProduct);
		$allContact = $this->modelContact->getContactbyID(1);
		$data = array(
			'title' => 'Detail Product',
			'produk' => $getProductbyID,
			'contact' => $allContact
		);
		$this->load->view('Home/detailProduct', $data);
	}

	public function aboutDurianKocok()
	{
		$allContact = $this->modelContact->getContactbyID(1);

		$data = array(
			'title' => 'About Owner',
			'contact' => $allContact
		);
		$this->load->view('Home/viewAbout', $data);
	}

	public function contactDurianKocok()
	{
		$getContact = $this->modelContact->getContactbyID(1);

		$data = array(
			'title' => 'Contact',
			'contact' => $getContact
		);
		$this->load->view('Home/viewContact', $data);
	}

	public function loginDurianKocok()
	{
		$this->load->view('viewLogin');
	}

	public function pemesananDurianKocok()
	{
		$getAllProduct = $this->modelProduct->getAllProduct();
		$data = array(
			'title' => 'Pemesanan',
			'getAllProduct' => $getAllProduct
		);
		$this->load->view('Home/viewPesanan', $data);
	}

	public function addPesananAction()
	{
		$this->form_validation->set_rules('namaPemesan', 'Nama Pemesan', 'required|trim',
			array(
				'required' => 'Nama Pemesan harus diisi'
			)
		);
		$this->form_validation->set_rules('alamatPemesan', 'Alamat Pemesan', 'required|trim',
			array(
				'required' => 'Alamat Pemesan harus diisi'
			)
		);
		$this->form_validation->set_rules('deskripsiPesanan', 'Deskripsi Pemesanan', 'required|trim',
			array(
				'required' => 'Deskripsi Pesanan harus diisi'
			)
		);
		$this->form_validation->set_rules('noWhatsapp', 'Nomor Whatsapp', 'required|numeric',
			array(
				'required' => 'Nomor Whatsapp harus diisi',
				'numeric' => 'Nomor Whatsapp harus berupa angka'
			)
		);

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('notification', validation_errors());
			redirect('pemesanan');
		} 
		else {
			$namaPemesan = $this->input->post('namaPemesan');
			$alamatPemesan = $this->input->post('alamatPemesan');
			$deskripsiPesanan = $this->input->post('deskripsiPesanan');
			$noWhatsapp = $this->input->post('noWhatsapp');

			// Menghapus karakter "-" dan " " dari nomor WhatsApp (jika ada)
			$noWhatsapp = str_replace(['-', ' '], '', $noWhatsapp);

			// Cek apakah nomor telepon dimulai dengan "0" dan memiliki panjang 11 digit
			if (substr($noWhatsapp, 0, 1) == '0' && strlen($noWhatsapp) == 11 || strlen($noWhatsapp) == 12 || strlen($noWhatsapp) == 13 || strlen($noWhatsapp) == 14) {
				// Mengganti "0" dengan "+62"
				$noWhatsapp = '62' . substr($noWhatsapp, 1);
			}

			$data = array(
				'namaPemesan' => $namaPemesan,
				'alamatPemesan' => $alamatPemesan,
				'deskripsiPesanan' => $deskripsiPesanan,
				'noWhatsapp' => $noWhatsapp
			);
			$data = $this->security->xss_clean($data);
			$this->modelPesanan->addPesanan($data);
			$this->session->set_flashdata('notification', 'Pemesanan berhasil');
			redirect('contact');
		}
	}

}
