<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{

  public function index()
  {

    $this->load->model('user/User_model', 'UM');

    $this->load->library('pagination');

    $config['base_url']     = base_url('home/alumni/index/');
    $config['total_rows']   = count($this->Crud_model->listing('tbl_alumni'));
    $config['per_page']     = 12;

    $from = $this->uri->segment(4);
    $this->pagination->initialize($config);
    $alumni = $this->UM->listAlumni($config['per_page'], $from);

    $data = [
      'alumni'    => $alumni,
      'pagination'    => $this->pagination->create_links(),
      'content' => 'home/alumni/index'
    ];
    $this->load->view('layout/wrapper', $data, FALSE);
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
