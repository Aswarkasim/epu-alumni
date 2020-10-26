<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

  public function index()
  {
    $profil = $this->Crud_model->listingOne('tbl_profil', 'id_profil', '1');
    $lowongan = $this->Crud_model->listing('tbl_lowongan', '3');
    $berita = $this->Crud_model->listing('tbl_berita', '2');
    $data = [
      'lowongan' => $lowongan,
      'berita' => $berita,
      'profil' => $profil,
      'content'  => 'home/tentang/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */