<?php


defined('BASEPATH') or exit('No direct script access allowed');

class kategori_pekerjaan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/kategori_pekerjaan/add',
      'edit'    => 'admin/kategori_pekerjaan/edit/',
      'delete'  => 'admin/kategori_pekerjaan/delete/'
    ];

    $kategori_pekerjaan = $this->Crud_model->listing('tbl_kategori_pekerjaan');
    $data = [

      'kategori_pekerjaan' => $kategori_pekerjaan,
      'tombol'   => $tombol,
      'content' => 'admin/kategori_pekerjaan/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');

    $valid = $this->form_validation;
    // $valid->set_rules('id_kategori_pekerjaan', 'Kode Kaategori', 'macthes[tbl_kategori_pekerjaan.id_kategori_pekerjaan]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
    $valid->set_rules('nama_kategori_pekerjaan', 'Nama Kaategori', 'macthes[tbl_kategori_pekerjaan.nama_kategori_pekerjaan]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === TRUE) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [
        'nama_kategori_pekerjaan'   => $i->post('nama_kategori_pekerjaan'),
        'id_kategori_pekerjaan'   => random_string()
      ];
      $this->Crud_model->add('tbl_kategori_pekerjaan', $data);
      $this->session->set_flashdata('msg', 'kategori_pekerjaan berhasil ditambah');
      redirect('admin/kategori_pekerjaan');
    }
  }
  function edit($id_kategori_pekerjaan)
  {
    $valid = $this->form_validation;
    // $valid->set_rules('id_kategori_pekerjaan', 'Kode Kaategori', 'macthes[tbl_kategori_pekerjaan.id_kategori_pekerjaan]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
    // $valid->set_rules('nama_kategori_pekerjaan', 'Nama Kaategori', 'macthes[tbl_kategori_pekerjaan.nama_kategori_pekerjaan]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === TRUE) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [
        'nama_kategori_pekerjaan'   => $i->post('nama_kategori_pekerjaan'),
        'id_kategori_pekerjaan'   => $id_kategori_pekerjaan
      ];
      $this->Crud_model->edit('tbl_kategori_pekerjaan', 'id_kategori_pekerjaan', $id_kategori_pekerjaan, $data);
      $this->session->set_flashdata('msg', 'kategori_pekerjaan berhasil diedit');
      redirect('admin/kategori_pekerjaan');
    }
  }

  function delete($id_kategori_pekerjaan)
  {
    $this->Crud_model->delete('tbl_kategori_pekerjaan', 'id_kategori_pekerjaan', $id_kategori_pekerjaan);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/kategori_pekerjaan');
  }
}
