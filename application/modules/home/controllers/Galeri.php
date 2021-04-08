<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

  public function index()
  {

    $this->load->model('user/User_model', 'UM');

    $this->load->library('pagination');

    $config['base_url']     = base_url('home/galeri/index/');
    $config['total_rows']   = count($this->Crud_model->listing('tbl_galeri'));
    $config['per_page']     = 12;

    $from = $this->uri->segment(4);
    $this->pagination->initialize($config);
    $galeri = $this->UM->listGaleri($config['per_page'], $from);

    $data = [
      'galeri'    => $galeri,
      'pagination'    => $this->pagination->create_links(),
      'content' => 'home/galeri/index'
    ];
    $this->load->view('layout/wrapper', $data, FALSE);
  }
}

/* End of file Controllername.php */
