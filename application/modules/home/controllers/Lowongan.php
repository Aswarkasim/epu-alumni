<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{


  public function index()
  {

    $this->load->model('user/User_model', 'UM');

    $this->load->library('pagination');

    $config['base_url']     = base_url('home/lowongan/index/');
    $config['total_rows']   = count($this->Crud_model->listingOneAll('tbl_lowongan', 'is_active', '1'));
    $config['per_page']     = 12;

    $from = $this->uri->segment(4);
    $this->pagination->initialize($config);
    $lowongan = $this->UM->listLowongan($config['per_page'], $from);

    $data = [
      'lowongan'    => $lowongan,
      'pagination'    => $this->pagination->create_links(),
      'content' => 'home/lowongan/index'
    ];
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  function detail($id_lowongan)
  {
    $lowongan = $this->Crud_model->listingOne('tbl_lowongan', 'id_lowongan', $id_lowongan);
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
