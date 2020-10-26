<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $banner = $this->Crud_model->listing('tbl_banner');
        $lowongan = $this->Crud_model->listing('tbl_lowongan');
        $berita = $this->Crud_model->listing('tbl_berita');
        $kategori = $this->Crud_model->listing('tbl_kategori');
        $data = [
            'banner'    => $banner,
            'lowongan'    => $lowongan,
            'berita'    => $berita,
            'kategori'    => $kategori,
            'content'   => 'home/home/index'
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
