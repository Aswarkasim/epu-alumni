<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $alumni = $this->Crud_model->listing('tbl_alumni');
        $data = [
            'add'      => 'admin/alumni/add',
            'edit'      => 'admin/alumni/edit/',
            'delete'      => 'admin/alumni/delete/',
            'is_active'      => 'admin/alumni/is_active/',
            'alumni'      => $alumni,
            'content'   => 'admin/alumni/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }




    public function add()
    {
        $this->load->helper('string');

        $required = '%s tidak boleh kosong';
        $is_username = '%s ' . post('username_alumni') . ' telah ada, silakan masukkan %s yang lain';
        $is_email = '%s ' . post('email') . ' telah ada, silakan masukkan %s yang lain';
        $valid = $this->form_validation;
        $valid->set_rules('username_alumni', 'Username', 'required|is_unique[tbl_alumni.username_alumni]', array('required' => $required, 'is_unique' => '%s telah ada. silakan masukkan NIM yang lain'));
        $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', array('required' => $required));
        $valid->set_rules('password', 'Password', 'required', array('required' => $required, 'is_unique' => $is_email));
        $valid->set_rules('re_password', 'Konfirmasi Password', 'required|matches[password]', array('required' => $required, 'matches' => '%s password yang anda masukkan tidak sama'));


        if ($valid->run() === FALSE) {
            $data = [
                'content'   => 'admin/alumni/add'
            ];
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'id_alumni'        => random_string(),
                'username_alumni'  => $i->post('username_alumni'),
                'namalengkap'      => $i->post('namalengkap'),
                'email'            => $i->post('email'),
                'angkatan'         => $i->post('angkatan'),
                'tahun_lulus'      => $i->post('tahun_lulus'),
                'pekerjaan'        => $i->post('pekerjaan'),
                'pekerjaan_pertama'        => $i->post('pekerjaan_pertama'),
                'masa_tunggu'      => $i->post('masa_tunggu'),
                'gender'           => $i->post('gender'),
                'is_active'        => 1,
                'password'         => sha1($i->post('password')),

            ];
            $this->Crud_model->add('tbl_alumni', $data);
            $this->session->set_flashdata('msg', 'ditambah');
            redirect('admin/alumni/detail/' . $data['id_alumni'], 'refersh');
        }
    }

    function edit($id_alumni)
    {
        $alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);

        $this->load->helper('string');

        $required = '%s tidak boleh kosong';
        $is_username = '%s ' . post('username_alumni') . ' telah ada, silakan masukkan %s yang lain';
        $is_email = '%s ' . post('email') . ' telah ada, silakan masukkan %s yang lain';
        $valid = $this->form_validation;
        // $valid->set_rules('username_alumni', 'Username', 'required|is_unique[tbl_alumni.username_alumni]', array('required' => $required, 'is_unique' => '%s telah ada. silakan masukkan NIM yang lain'));
        $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', array('required' => $required));


        if ($valid->run() === FALSE) {
            $data = [
                'title'     => 'Edit data alumni ' . $alumni->namalengkap,
                'edit'       => 'admin/alumni/edit/',
                'back'       => 'admin/alumni/',
                'alumni'    => $alumni,
                'content'   => 'admin/alumni/edit'
            ];
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $password = "";
            if ($i->post('password') != "") {
                $password = sha1($i->post('password'));
            } else {
                $password = $alumni->password;
            }

            $data = [
                'id_alumni'        => $alumni->id_alumni,
                'username_alumni'  => $i->post('username_alumni'),
                'namalengkap'      => $i->post('namalengkap'),
                'email'            => $i->post('email'),
                'angkatan'         => $i->post('angkatan'),
                'tahun_lulus'      => $i->post('tahun_lulus'),
                'pekerjaan'        => $i->post('pekerjaan'),
                'pekerjaan_pertama'        => $i->post('pekerjaan_pertama'),
                'masa_tunggu'      => $i->post('masa_tunggu'),
                'gender'           => $i->post('gender'),
                'is_active'        => 1,
                'password'         => $password,

            ];
            $this->Crud_model->edit('tbl_alumni', 'id_alumni', $id_alumni, $data);
            $this->session->set_flashdata('msg', 'ditambah');
            redirect('admin/alumni/detail/' . $data['id_alumni'], 'refersh');
        }
    }

    function delete($id_alumni)
    {
        $this->Crud_model->delete('tbl_alumni', 'id_alumni', $id_alumni);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/alumni');
    }

    function is_active($id_alumni, $is)
    {
        $data = [
            'is_active' => $is
        ];
        $this->Crud_model->edit('tbl_alumni', 'id_alumni', $id_alumni, $data);
        $this->session->set_flashdata('msg', 'Akun alumni telah diaktifkan');
        redirect('admin/alumni', 'refresh');
    }
}
