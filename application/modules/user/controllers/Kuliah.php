<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kuliah extends CI_Controller
{

  public function index()
  {
    $id_alumni = $this->session->userdata('id_alumni');
    $alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);
    $data = [
      'alumni'   => $alumni,
      'content'  => 'user/kuliah/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function edit()
  {
    $id_alumni = $this->session->userdata('id_alumni');
    $alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);

    $valid = $this->form_validation;

    // $valid->set_rules('id_alumni', 'NIM', 'required');
    $valid->set_rules('program_studi', 'Program Studi', 'required');
    $valid->set_rules('judul_skripsi', 'Judul Skripsi', 'required');
    $valid->set_rules(
      'tahun_lulus',
      'Tahun Lulus',
      'required|numeric|less_than[2070]|greater_than[1990]|min_length[4]|max_length[4]',
      array(
        'min_length' => '%s minimal 4 karakter',
        'max_length' => '%s maksimal 4 karakter',
        'less_than'  => '%s harus kurang dari 2070',
        'greater_than'  => '%s harus lebih dari 1990',
      )
    );
    $valid->set_rules(
      'tahun_wisuda',
      'Tahun Wisuda',
      'required|numeric|less_than[2070]|greater_than[1990]|min_length[4]|max_length[4]',
      array(
        'min_length' => '%s minimal 4 karakter',
        'max_length' => '%s maksimal 4 karakter',
        'less_than'  => '%s harus kurang dari 2070',
        'greater_than'  => '%s harus lebih dari 1990',
      )
    );
    $valid->set_rules(
      'angkatan',
      'Angkatan',
      'required|numeric|less_than[2070]|greater_than[1990]|min_length[4]|max_length[4]',
      array(
        'min_length' => '%s minimal 4 karakter',
        'max_length' => '%s maksimal 4 karakter',
        'less_than'  => '%s harus kurang dari 2070',
        'greater_than'  => '%s harus lebih dari 1990',
      )
    );
    $valid->set_rules('ipk', 'ipk', 'required');
    $valid->set_rules('no_ijazah', 'no_ijazah', 'required');
    $valid->set_rules('kerelevansian', 'kerelevansian', 'required');

    if ($valid->run() === FALSE) {
      $data = [
        'alumni' => $alumni,
        'content'   => 'user/kuliah/edit'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_alumni'       => $id_alumni,
        'program_studi'     => $i->post('program_studi'),
        'judul_skripsi'           => $i->post('judul_skripsi'),
        'tahun_lulus'    => $i->post('tahun_lulus'),
        'tahun_wisuda'   => $i->post('tahun_wisuda'),
        'angkatan'   => $i->post('angkatan'),
        'ipk'            => $i->post('ipk'),
        'no_ijazah'       => $i->post('no_ijazah'),
        'kerelevansian'     => $i->post('kerelevansian'),
      ];
      $this->Crud_model->edit('tbl_alumni', 'id_alumni', $id_alumni, $data);
      $this->session->set_flashdata('msg', 'data diedit');
      redirect('user/kuliah/edit', 'refresh');
    }
  }
}
