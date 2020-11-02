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


    function add()
    {

        $valid = $this->form_validation;

        $valid->set_rules('nama_alumni', 'Nama Alumni', 'required');
        $valid->set_rules('email', 'Email', 'required|is_unique[tbl_alumni.email]|valid_email');
        $valid->set_rules('password', 'Password', 'required');
        $valid->set_rules('re_password', 'Retype Password', 'required|matches[password]');

        if ($valid->run() === FALSE) {
            $data = [
                'title'     => 'Tambah Alumni',
                'add'       => 'admin/alumni/add',
                'back'      => 'admin/alumni',
                'content'   => 'admin/alumni/add'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'nama_alumni'     => $i->post('nama_alumni'),
                'email'         => $i->post('email'),
                'password'      => sha1($i->post('password')),
                'role'          => $i->post('role'),
                'is_active'     => $i->post('is_aktif')
            ];
            $this->Crud_model->add('tbl_alumni', $data);
            $this->session->set_flashdata('msg', 'ditambah');
            redirect('admin/alumni/add', 'refresh');
        }
    }

    function edit($id_alumni)
    {
        $alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);

        $valid = $this->form_validation;

        $valid->set_rules('nama_alumni', 'Nama Alumni', 'required');
        $valid->set_rules('email', 'Email', 'required|valid_email');
        $valid->set_rules('password', 'Password', 'matches[re_password]');
        $valid->set_rules('re_password', 'Retype Password', 'matches[password]');

        if ($valid->run() === FALSE) {
            $data = [
                'title'     => 'Edit ' . $alumni->nama_alumni,
                'edit'       => 'admin/alumni/edit/',
                'back'      => 'admin/alumni',
                'alumni'      => $alumni,
                'content'   => 'admin/alumni/edit'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;

            $password = "";
            if ($i->post('password') != "") {
                $password = sha1($i->post('password'));
            } else {
                $password = $alumni->password;
            }
            $data = [
                'id_alumni'       => $id_alumni,
                'nama_alumni'     => $i->post('nama_alumni'),
                'email'         => $i->post('email'),
                'password'      => $password,
                'role'          => $i->post('role'),
                'is_active'     => $i->post('is_aktif')
            ];
            $this->Crud_model->edit('tbl_alumni', 'id_alumni', $id_alumni, $data);
            $this->session->set_flashdata('msg', 'diedit');
            redirect('admin/alumni/edit/' . $id_alumni, 'refresh');
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
