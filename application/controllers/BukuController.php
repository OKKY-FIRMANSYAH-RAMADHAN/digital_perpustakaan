<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BukuController extends CI_Controller {

		function __construct(){
        parent::__construct();
        $this->load->model('BukuModel');
        $this->load->model('KategoriModel');
		  $this->load->helper('url', 'form'); 
    		$this->load->library('form_validation');
    }
    
    public function index()
    {
			$data = array(
				'header' 	=> 'template/header',
				'footer' 	=> 'template/footer',
				'buku'		=> $this->BukuModel->getAllBuku()
			);
			
			return $this->load->view('buku/list_buku', $data);
    }

	 	public function insert(){
			if ($this->input->post()) {
				$config['upload_path'] = FCPATH.'/upload/';
				$config['allowed_types'] = 'pdf|jpeg|jpg|png';
				$config['max_size'] = 5120;
				

				$this->load->library('upload', $config);

				// Upload file Buku
				if (!$this->upload->do_upload('file')) {
					$file_buku_name = '';
					$error_buku = $this->upload->display_errors();
					echo 'Error uploading file buku: ' . $error_buku;
				} else {
					$file_buku_name = $this->upload->data('file_name');
				}

				// Upload file Cover Buku
				if (!$this->upload->do_upload('cover')) {
					$file_cover_name = '';
					$error_cover = $this->upload->display_errors();
					echo 'Error uploading file cover: ' . $error_cover;
				} else {
					$file_cover_name = $this->upload->data('file_name');
				}

				$data = [
					'judul' => $this->input->post('judul'),
					'idkategori' => $this->input->post('idkategori'),
					'deskripsi' => $this->input->post('deskripsi'),
					'jumlah' => $this->input->post('jumlah'),
					'file' => $file_buku_name,
					'cover' => $file_cover_name
				];

				$this->BukuModel->insertData($data);
				$this->session->set_flashdata('msg', 'Berhasil Menambah Data Buku');
				redirect('/list-buku');
			}else{
            $data = array(
                  'header' 	=> 'template/header',
                  'footer' 	=> 'template/footer',
                  'kategori' => $this->KategoriModel->getAllKategori()
               );
				return $this->load->view('buku/create_buku', $data);
         }
    	}
}
