<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{

  public function index()
  {
    $alumni = $this->Crud_model->listing('tbl_alumni');
    $data = [
      'alumni'  => $alumni,
      'content'  => 'home/alumni/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function detail($id_alumni)
  {
    $alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);
    $data = [
      'alumni'  => $alumni,
      'content'  => 'home/alumni/detail'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */
