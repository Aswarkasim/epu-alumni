<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

  public function index()
  {
    $berita = $this->Crud_model->listing('tbl_berita');
    $kategori = $this->Crud_model->listing('tbl_kategori');

    $data = [
      'berita'  => $berita,
      'kategori'  => $kategori,
      'content'  => 'home/berita/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
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
