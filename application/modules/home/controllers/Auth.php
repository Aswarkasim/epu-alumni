<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('home/Home_model', 'HM');
  }

  public function index()
  {
    $this->load->helper('string');

    if ($this->session->userdata('id_alumni')) {
      redirect('home');
    }
    $valid = $this->form_validation;

    $valid->set_rules('username_alumni', 'Username', 'required', array('required' => '%s harus diisi'));
    $valid->set_rules('password', 'Password', 'required|min_length[6]', array('required' => 'Password harus diisi', 'min_length' => 'Password minimal 6 karakter'));

    if ($valid->run() === FALSE) {
      $data = array(
        'content'   => 'home/auth/login'
      );
      $this->load->view('home/layout/wrapper', $data);
    } else {
      $i          = $this->input;
      $username      = $i->post('username_alumni');
      $password   = $i->post('password');
      $cek_login  = $this->HM->loginUsername($username, $password);
      //print_r($email); die;

      if (!empty($cek_login) == 1) {
        if ($cek_login->is_active == 1) {
          $s = $this->session;
          $s->set_userdata('id_alumni', $cek_login->id_alumni);
          $s->set_userdata('username_alumni', $cek_login->username_alumni);
          $s->set_userdata('namalengkap', $cek_login->namalengkap);
          redirect('user/pribadi', 'refresh');
        } else {
          $data = array(
            'error'     => 'Akun anda belum aktif. Silakan hubungi admin bagian untuk mengaktifkan akun',
            'content'   => 'home/auth/login'
          );
          $this->load->view('home/layout/wrapper', $data);
        }
      } else {
        $data = array(
          'error'     => 'username atau password salah',
          'content'   => 'home/auth/login'
        );
        $this->load->view('home/layout/wrapper', $data);
      }
    }
  }

  public function register()
  {
    $this->load->helper('string');

    $required = '%s tidak boleh kosong';
    $is_username = '%s ' . post('username_alumni') . ' telah ada, silakan masukkan %s yang lain';
    $is_email = '%s ' . post('email') . ' telah ada, silakan masukkan %s yang lain';
    $valid = $this->form_validation;
    $valid->set_rules('username_alumni', 'Username', 'required|is_unique[tbl_alumni.username_alumni]', array('required' => $required, 'is_unique' => '%s telah ada. silakan masukkan NIM yang lain'));
    $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', array('required' => $required));
    $valid->set_rules('email', 'email', 'required|is_unique[tbl_alumni.email]|valid_email', array('required' => $required, 'is_unique' => $is_email, 'valid_email' => '%s yang anda  masukkan tidak valid'));
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
    $valid->set_rules('password', 'Password', 'required|min_length[6]', array('required' => $required, 'min_length' => 'Password minimal 6 karakter', 'is_unique' => $is_email));
    $valid->set_rules('re_password', 'Konfirmasi Password', 'required|matches[password]', array('required' => $required, 'matches' => '%s password yang anda masukkan tidak sama'));

    // $valid->set_rules(
    //   'angkatan',
    //   'Angkatan',
    //   'callback_angakatanCheck'
    // );
    $current = date('Y-m-d');
    $yearNow = date("Y", strtotime($current));

    if ($valid->run() === FALSE) {
      $data = [
        'yearNow'   => $yearNow,
        'content'   => 'home/auth/register'
      ];
      $this->load->view('layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_alumni'        => random_string(),
        'username_alumni'       => $i->post('username_alumni'),
        'namalengkap'       => $i->post('namalengkap'),
        'email'       => $i->post('email'),
        'angkatan'       => $i->post('angkatan'),
        'tahun_lulus'       => $i->post('tahun_lulus'),
        'pekerjaan'       => $i->post('pekerjaan'),
        'nohp'       => $i->post('nohp'),
        'gender'       => $i->post('gender'),
        'is_active'       => 1,
        'password'       => sha1($i->post('password')),

      ];
      $this->Crud_model->add('tbl_alumni', $data);
      $this->session->set_flashdata('msg', 'ditambah');
      redirect('home/auth', 'refersh');
    }
  }

  function logout()
  {
    $s = $this->session;
    $s->unset_userdata('id_alumni');
    $s->unset_userdata('username_alumni');
    $s->unset_userdata('namalengkap');
    redirect(base_url('home/auth'), 'refresh');
  }

  function angakatanCheck($num)
  {
    if ($num > 2040) {
      $this->form_validation->set_message(
        'angkatan',
        '%s tidak boleh lebih dari 2040'
      );
      return FALSE;
    } else if ($num < 1996) {
      $this->form_validation->set_message(
        'angkatan',
        '%s tidak boleh kurang dari 1996'
      );
      return FALSE;
    } else {
      return TRUE;
    }
  }
}
