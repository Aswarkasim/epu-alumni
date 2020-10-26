<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{

  public function index()
  {
    $lowongan = $this->Crud_model->listing('tbl_lowongan');
    $data = [
      'lowongan' => $lowongan,
      'content'  => 'home/lowongan/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function detail($slug)
  {
    $lowongan = $this->Crud_model->listingOne('tbl_lowongan', 'slug', $slug);
    $lowonganList = $this->Crud_model->listing('tbl_lowongan', '3');
    $berita = $this->Crud_model->listing('tbl_berita', '2');
    $data = [
      'lowongan'  => $lowongan,
      'lowonganList'  => $lowonganList,
      'berita'  => $berita,
      'content'   => 'home/lowongan/detail'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */
