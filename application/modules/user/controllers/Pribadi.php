<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pribadi extends CI_Controller
{

  public function index()
  {

    $this->load->model('user/User_model', 'UM');
    $id_alumni = $this->session->userdata('id_alumni');
    $alumni = $this->UM->dataPribadi($id_alumni);

    $data = [
      'alumni'   => $alumni,
      'content'  => 'user/pribadi/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }



  function edit()
  {
    $id_alumni = $this->session->userdata('id_alumni');
    $alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);
    $kategori_pekerjaan = $this->Crud_model->listing('tbl_kategori_pekerjaan');

    $valid = $this->form_validation;

    $valid->set_rules('namalengkap', 'Nama User', 'required');
    $valid->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
    $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
    $valid->set_rules('nohp', 'No. Hp', 'required');
    $valid->set_rules('email', 'Email', 'required');

    if ($valid->run() === FALSE) {
      $data = [
        'alumni' => $alumni,
        'kategori_pekerjaan'   => $kategori_pekerjaan,
        'content'   => 'user/pribadi/edit'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_alumni'       => $id_alumni,
        'namalengkap'     => $i->post('namalengkap'),
        'email'         => $i->post('email'),
        'tempat_lahir'         => $i->post('tempat_lahir'),
        'tanggal_lahir'         => $i->post('tanggal_lahir'),
        'nohp'         => $i->post('nohp'),
        'pekerjaan'         => $i->post('pekerjaan'),
        'id_kategori_pekerjaan'         => $i->post('id_kategori_pekerjaan'),
        'penghasilan'         => $i->post('penghasilan'),
      ];
      $this->Crud_model->edit('tbl_alumni', 'id_alumni', $id_alumni, $data);
      $this->session->set_flashdata('msg', 'data diedit');
      redirect('user/pribadi/edit', 'refresh');
    }
  }

  function ubahGambar()
  {
    $id_alumni = $this->session->userdata('id_alumni');
    $alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);
    if (!empty($_FILES['gambar']['name'])) {
      $config['upload_path']   = './assets/uploads/images/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '24000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('gambar')) {
        $this->upload->display_errors();
        redirect('user/pribadi');
      } else {
        if ($alumni->gambar != "") {
          unlink($alumni->gambar);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'gambar'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_alumni', 'id_alumni', $id_alumni, $data);
        $this->session->set_flashdata('msg', 'KTP diupload');
        redirect('user/pribadi');
      }
    }
  }
}
