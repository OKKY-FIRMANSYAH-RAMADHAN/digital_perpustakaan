<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriController extends CI_Controller {
    
	function __construct()
    {
        parent::__construct();
        $this->load->model('KategoriModel');
    }

    public function index(){
        $data = array(
            'header' 	=> 'template/header',
        	'footer' 	=> 'template/footer',
			'kategori'	=> $this->KategoriModel->getAllKategori()
        );

        return $this->load->view('kategori/list_kategori',$data);
    }

	public function insert(){
		if ($this->input->post()) {
			$data = [
				'kategori' => $this->input->post('kategori'),
			];
			$this->KategoriModel->insertData($data);
			$this->session->set_flashdata('msg', 'Berhasil Menambah Data Kategori');
			redirect('/list-kategori');
		}else{
			$data = array(
				'header' => 'template/header',
				'footer' => 'template/footer',
			);
			return $this->load->view('kategori/create_kategori',$data);
		}
      	
    }

	public function update($idKategori){
		if ($this->input->post()) {
			$data = [
				'kategori' => $this->input->post('kategori'),
			];
			$this->KategoriModel->updateData($idKategori,$data);
			$this->session->set_flashdata('msg', 'Berhasil Mengubah Data Kategori');
			redirect('/list-kategori');
		}else{
			$data = array(
				'header' 	=> 'template/header',
				'footer' 	=> 'template/footer',
				'kategori' 	=> $this->KategoriModel->getOne($idKategori),
			);
			return $this->load->view('kategori/update_kategori',$data);
		}
      	
    }

	public function delete($idKategori) {
		$this->KategoriModel->deleteData($idKategori);
        $this->session->set_flashdata('msg', 'Berhasil Menghapus Data Kategori');
        redirect('/list-kategori');
	}
}