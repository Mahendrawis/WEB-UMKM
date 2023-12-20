<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productDURCOK extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelLogin');
        $this->load->model('modelProduct');
        $this->modelLogin->protectVerifyLoginAdminController();
    }

    public function ProductDurianKocok()
    {
        $allProduct = $this->modelProduct->getAllProduct();
        $data = array(
            'title' => 'Product Durian Kocok',
            'allProduct' => $allProduct
        );
        $this->load->view('Admin/viewProduct', $data);
    }

    public function addProductDurianKocok()
    {
        $data = array(
            'title' => 'Add Product Durian Kocok',
        );
        $this->load->view('Admin/addProduct', $data);
    }

    public function addProductDurianKocokAction()
    {
        $this->form_validation->set_rules('namaProduct', 'Nama Product', 'required|trim',
            array(
                'required' => 'Nama Product harus diisi!'
            )
        );
        $this->form_validation->set_rules('hargaProduct', 'Harga Product', 'required|trim|numeric',
            array(
                'required' => 'Harga Product harus diisi!',
                'numeric' => 'Harga Product harus berupa angka!'
            )
        );
        $this->form_validation->set_rules('diskonProduct', 'Diskon Product', 'trim|numeric',
            array(
                'numeric' => 'Diskon Product harus berupa angka!'
            )
        );
        $this->form_validation->set_rules('deskripsiProduct', 'Deskripsi Product', 'required|trim',
            array(
                'required' => 'Deskripsi Product harus diisi!'
            )
        );

        if ($this->form_validation->run() == false) {
            redirect(base_url('addProductDurianKocok'));
        } else {
            $namaProduct = $this->input->post('namaProduct');
            $hargaProduct = $this->input->post('hargaProduct');
            $diskonProduct = $this->input->post('diskonProduct');
            $deskripsiProduct = $this->input->post('deskripsiProduct');
            $username = $this->input->post('username');

            // Check apakah ada gambar yang diunggah
            if ($_FILES['gambarProduct']['error'] !== UPLOAD_ERR_NO_FILE) {
                // Konfigurasi untuk unggah gambar
                $config['upload_path'] = './assets/img/product/';
                $config['allowed_types'] = 'jpg|png|jpeg|webp';
                $config['max_size'] = '2048'; // Batas ukuran gambar (2MB)
                $config['file_name'] = 'product' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambarProduct')) {
                    $gambarProduct = $this->upload->data('file_name');
                } else {
                    // Jika gambar tidak sesuai konfigurasi
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    $this->addProductDurianKocok();
                    return; // Hentikan eksekusi
                }
            } else {
                // Jika tidak ada gambar yang diunggah, atur gambar default
                $gambarProduct = 'default.jpg';
            }

            $data = array(
                'namaProduct' => htmlspecialchars($namaProduct),
                'hargaProduct' => htmlspecialchars($hargaProduct),
                'diskonProduct' => htmlspecialchars($diskonProduct),
                'deskripsiProduct' => $deskripsiProduct,
                'gambarProduct' => $gambarProduct,
                'username' => $username
            );

            $this->modelProduct->addProduct($data);
            $this->session->set_flashdata('success', 'Produk berhasil ditambahkan!');
            redirect('productAdmin');
        }
    }


    public function editProductDurianKocok($idProduct)
    {
        $product = $this->modelProduct->getProductById($idProduct);
        $data = array(
            'title' => 'Edit Product Durian Kocok',
            'product' => $product
        );
        $this->load->view('Admin/editProduct', $data);
    }

    public function editProductDurianKocokAction()
    {
        $this->form_validation->set_rules('namaProduct', 'Nama Product', 'required|trim',
            array(
                'required' => 'Nama Product harus diisi!'
            )
        );
        $this->form_validation->set_rules('hargaProduct', 'Harga Product', 'required|trim|numeric',
            array(
                'required' => 'Harga Product harus diisi!',
                'numeric' => 'Harga Product harus berupa angka!'
            )
        );
        $this->form_validation->set_rules('diskonProduct', 'Diskon Product', 'trim|numeric',
            array(
                'numeric' => 'Diskon Product harus berupa angka!'
            )
        );
        $this->form_validation->set_rules('deskripsiProduct', 'Deskripsi Product', 'required|trim',
            array(
                'required' => 'Deskripsi Product harus diisi!'
            )
        );

        $idProduct = $this->input->post('idProduct');

        if ($this->form_validation->run() == false) {
            // Validasi gagal, tampilkan kembali halaman edit dengan pesan kesalahan
            redirect(base_url('editProductDurianKocok/' . $idProduct));
        } 
        else {
            // Validasi berhasil
            $namaProduct = $this->input->post('namaProduct');
            $hargaProduct = $this->input->post('hargaProduct');
            $diskonProduct = $this->input->post('diskonProduct');
            $deskripsiProduct = $this->input->post('deskripsiProduct');

            $gambarProductLama = $this->input->post('gambarProductLama'); // Nama gambar lama

            // Check apakah ada gambar yang diunggah
            if ($_FILES['gambarProduct']['error'] !== UPLOAD_ERR_NO_FILE) {
                // Konfigurasi untuk unggah gambar
                $config['upload_path'] = './assets/img/product/';
                $config['allowed_types'] = 'jpg|png|jpeg|webp';
                $config['max_size'] = '2048'; // Batas ukuran gambar (2MB)
                $config['file_name'] = 'product' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambarProduct')) {
                    // Hapus gambar lama jika bukan gambar default
                    if ($gambarProductLama != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/product/' . $gambarProductLama);
                    }

                    $gambarProduct = $this->upload->data('file_name');
                } else {
                    // Jika gambar tidak sesuai konfigurasi
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    $this->editProductDurianKocok($idProduct);
                    return; // Hentikan eksekusi
                }
            } else {
                // Jika tidak ada gambar yang diunggah, atur gambar lama
                $gambarProduct = $gambarProductLama;
            }

            $data = array(
                'namaProduct' => htmlspecialchars($namaProduct),
                'hargaProduct' => htmlspecialchars($hargaProduct),
                'diskonProduct' => htmlspecialchars($diskonProduct),
                'deskripsiProduct' => $deskripsiProduct,
                'gambarProduct' => $gambarProduct
            );

            $this->modelProduct->editProduct($idProduct, $data);
            $this->session->set_flashdata('success', 'Product berhasil diubah!');
            redirect('productAdmin');
        }
    }

    public function deleteProductDurianKocok($idProduct)
    {
        $product = $this->modelProduct->getProductById($idProduct);
        $gambarProduct = $product->gambarProduct;

        // Konstanta untuk nama file gambar default
        define('DEFAULT_IMAGE', 'default.jpg');

        // Hapus gambar jika bukan gambar default
        if ($gambarProduct != DEFAULT_IMAGE) {
            unlink(FCPATH . 'assets/img/product/' . $gambarProduct);
        }

        $this->modelProduct->deleteProduct($idProduct);
        $this->session->set_flashdata('success', 'Product berhasil dihapus!');
        redirect('productAdmin');
    }
}