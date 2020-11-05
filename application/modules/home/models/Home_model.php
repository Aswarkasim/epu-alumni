<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{




  public function loginUsername($username, $password)
  {
    $this->db->select('*')
      ->from('tbl_alumni')
      ->where(array(
        'username_alumni'      => $username,
        'password'   => sha1($password)
      ));
    $query = $this->db->get();
    return $query->row();
  }
  public function loginNim($id_alumni, $password)
  {
    $this->db->select('*')
      ->from('tbl_alumni')
      ->where(array(
        'id_alumni'      => $id_alumni,
        'password'   => sha1($password)
      ));
    $query = $this->db->get();
    return $query->row();
  }

  public function cariBerita($key)
  {
    $this->db->select('*')->from('tbl_berita')
      ->like('judul_berita', $key);
    return $this->db->get()->result();
  }
}
