<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  function listBerita()
  {
    $this->db->select('tbl_berita.*,
                            tbl_kategori.nama_kategori')
      ->from('tbl_berita')
      ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kategori.id_kategori', 'LEFT');
    return $this->db->get()->result();
  }

  function detailBerita($slug)
  {
    $this->db->select('tbl_berita.*,
                            tbl_kategori.nama_kategori')
      ->from('tbl_berita')
      ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kategori.id_kategori', 'LEFT')
      ->where('tbl_berita.slug', $slug);
    return $this->db->get();
  }

  function listSaran()
  {
    $this->db->select('tbl_saran.*,
                            tbl_alumni.namalengkap')
      ->from('tbl_saran')
      ->join('tbl_alumni', 'tbl_alumni.id_alumni = tbl_saran.id_alumni', 'LEFT')
      ->order_by('tbl_saran.date_created', 'DESC');
    return $this->db->get()->result();
  }

  function detailSaran($id_saran)
  {
    $this->db->select('tbl_saran.*,
                            tbl_alumni.namalengkap')
      ->from('tbl_saran')
      ->join('tbl_alumni', 'tbl_alumni.id_alumni = tbl_saran.id_alumni', 'LEFT')
      ->where('id_saran', $id_saran);
    return $this->db->get()->row();
  }
}



/* End of file ModelName.php */
