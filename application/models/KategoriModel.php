<?php

class KategoriModel extends CI_Model
{
   function getAllKategori(){
      $this->db->select('*');
      $this->db->from('t_kategori');
      return $this->db->get()->result();
   }

	function insertData($data){
      $this->db->insert('t_kategori', $data);
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