<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kesan extends CI_Controller
{

  public function index()
  {
    $id_alumni = $this->session->userdata('id_alumni');
    $alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);
    $data = [
      'alumni'   => $alumni,
      'content'  => 'user/kesan/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }



  function edit()
  {
    $id_alumni = $this->session->userdata('id_alumni');
    $alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);

    $valid = $this->form_validation;

    $valid->set_rules('kesan', 'Kesan', 'required');
    $valid->set_rules('pesan', 'Pesan', 'required');

    if ($valid->run() === FALSE) {
      $data = [
        'alumni'    => $alumni,
        'content'   => 'user/kesan/edit'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'pesan'     => $i->post('pesan'),
        'kesan'         => $i->post('kesan')
      ];
      $this->Crud_model->edit('tbl_alumni', 'id_alumni', $id_alumni, $data);
      $this->session->set_flashdata('msg', 'Pesan & kesan diperbaharui');
      redirect('user/kesan', 'refresh');
    }
  }
}
