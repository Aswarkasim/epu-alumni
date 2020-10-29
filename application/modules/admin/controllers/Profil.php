
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

  public function index()
  {
  }

  public function edit()
  {

    $profil = $this->Crud_model->listingOne('tbl_profil', 'id_profil', '1');

    $valid = $this->form_validation;
    $valid->set_rules('nama_instansi', 'Nama Instansi', 'required', array('required' => '%s tidak boleh kosong'));
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          print_r('error gambar');
          die;
          $data = [
            'title'     => 'Profil ',
            'profil'    => $profil,
            'content'   => 'admin/profil/profil',
            'error'     => $this->upload->display_errors(),
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {

          if ($profil->gambar != '') {
            unlink($profil->gambar);
          }
          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;
          $data = [
            'nama_instansi'   => $i->post('nama_instansi'),
            'tentang'         => $i->post('tentang'),
            'gambar'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->edit('tbl_profil', 'id_profil', '1', $data);
          $this->session->set_flashdata('msg', 'Profil diedit');
          redirect('admin/profil/edit');
        }
      } else {

        $i = $this->input;
        $data = [
          'nama_instansi'   => $i->post('nama_instansi'),
          'tentang'         => $i->post('tentang'),
        ];
        $this->Crud_model->edit('tbl_profil', 'id_profil', '1', $data);
        $this->session->set_flashdata('msg', 'Profil diedit');
        redirect('admin/profil/edit');
      }
    }
    $data = [
      'title'     => 'Profil ',
      'profil'    => $profil,
      'content'   => 'admin/profil/profil',
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function kontak()
  {
    $profil = $this->Crud_model->listingOne('tbl_profil', 'id_profil', '1');
    $valid = $this->form_validation;
    $valid->set_rules('nama_pimpinan', 'Nama Pimpinan', 'required', array('required' => '%s tidak boleh kosong'));

    if ($valid->run() === FALSE) {
      $data = [
        'title'     => 'Kontak ',
        'profil'    => $profil,
        'content'   => 'admin/profil/kontak'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'nama_pimpinan'   => $i->post('nama_pimpinan'),
        'telepon'   => $i->post('telepon'),
        'email'   => $i->post('email'),
        'alamat'   => $i->post('alamat'),
      ];
      $this->Crud_model->edit('tbl_profil', 'id_profil', '1', $data);
      $this->session->set_flashdata('msg', 'Profil diubah');
      redirect('admin/profil/kontak');
    }
  }
}
