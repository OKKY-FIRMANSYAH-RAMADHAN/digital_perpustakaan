<?php

class BukuModel extends CI_Model
{
   function getAllBuku(){
      $this->db->select('*');
      $this->db->from('t_buku');
		$this->db->join('t_kategori', 't_buku.idkategori = t_kategori.idkategori');
      return $this->db->get()->result();
   }

	function insertData($data){
      $this->db->insert('t_buku', $data);
   }

	function getOne($idKategori){
      $this->db->select('*');
      $this->db->from('t_kategori');
      $this->db->where('idkategori', $idKategori);
      return $this->db->get()->result();
   }

	function updateData($idKategori, $data){
        $this->db->where('idkategori', $idKategori);
        $this->db->update('t_kategori', $data);
   }

	function deleteData($idKategori){
        $this->db->where('idkategori', $idKategori);
        $this->db->delete('t_kategori');
    }
}