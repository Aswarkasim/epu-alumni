<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

  function dataPribadi($id_alumni)
  {
    $this->db->select('tbl_alumni.*,
                            tbl_kategori_pekerjaan.nama_kategori_pekerjaan')
      ->from('tbl_alumni')
      ->join('tbl_kategori_pekerjaan', 'tbl_kategori_pekerjaan.id_kategori_pekerjaan = tbl_kategori_pekerjaan.id_kategori_pekerjaan', 'LEFT')
      ->where('tbl_alumni.id_alumni', $id_alumni);
    return $this->db->get()->row();
  }

  function listLowongan($limit, $offset)
  {
    $query = $this->db->select('*')
      ->from('tbl_lowongan')
      ->limit($limit)
      ->offset($offset)
      ->where('is_active', '1')
      ->get();
    return $query->result();
  }

  function listBerita($limit, $offset)
  {
    $query = $this->db->select('*')
      ->from('tbl_berita')
      ->limit($limit)
      ->offset($offset)
      ->get();
    return $query->result();
  }

  function listAlumni($limit, $offset)
  {
    $query = $this->db->select('*')
      ->from('tbl_alumni')
      ->limit($limit)
      ->offset($offset)
      ->get();
    return $query->result();
  }

  function listGaleri($limit, $offset)
  {
    $query = $this->db->select('*')
      ->from('tbl_galeri')
      ->limit($limit)
      ->offset($offset)
      ->get();
    return $query->result();
  }
}
