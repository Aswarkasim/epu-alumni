<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

  public function index()
  {

    $this->load->model('user/User_model', 'UM');

    $this->load->library('pagination');

    $config['base_url']     = base_url('home/berita/index/');
    $config['total_rows']   = count($this->Crud_model->listing('tbl_berita'));
    $config['per_page']     = 5;

    $from = $this->uri->segment(4);
    $this->pagination->initialize($config);
    $berita = $this->UM->listBerita($config['per_page'], $from);
    $kategori = $this->Crud_model->listing('tbl_kategori');

    $data = [
      'berita'    => $berita,
      'kategori'  => $kategori,
      'pagination'    => $this->pagination->create_links(),
      'content' => 'home/berita/index'
    ];
    $this->load->view('layout/wrapper', $data, FALSE);
  }


  function detail($slug)
  {
    $berita = $this->Crud_model->listingOne('tbl_berita', 'slug', $slug);
    $lowongan = $this->Crud_model->listing('tbl_lowongan', '3');
    $beritaList = $this->Crud_model->listing('tbl_berita', '2');
    $data = [
      'berita'  => $berita,
      'beritaList'  => $beritaList,
      'lowongan'  => $lowongan,
      'content'   => 'home/berita/detail'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function cari()
  {

    $this->load->model('home/Home_model', 'HM');
    $key = $this->input->post('key');
    $berita = $this->HM->cariBerita($key);
    $kategori = $this->Crud_model->listing('tbl_kategori');

    $data = [
      'berita'  => $berita,
      'kategori'  => $kategori,
      'content'  => 'home/berita/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function kategori($id_kategori)
  {
    $berita = $this->Crud_model->listingOneAll('tbl_berita', 'id_kategori', $id_kategori);
    $kategori = $this->Crud_model->listing('tbl_kategori');

    $data = [
      'berita'  => $berita,
      'kategori'  => $kategori,
      'content'  => 'home/berita/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */
