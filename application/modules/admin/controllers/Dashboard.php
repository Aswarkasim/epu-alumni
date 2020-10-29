<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == "") {
            redirect('admin/auth');
        }
    }


    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);

        $alumni = $this->Crud_model->listing('tbl_alumni');
        $berita = $this->Crud_model->listing('tbl_berita');
        $lowongan = $this->Crud_model->listing('tbl_lowongan');
        $saran = $this->Crud_model->listingOneAll('tbl_saran', 'is_read', '1');

        $data = [
            'title'     => 'Dashboard',
            'user'      => $user,
            'berita'      => $berita,
            'alumni'      => $alumni,
            'lowongan'      => $lowongan,
            'saran'      => $saran,
            'content'   => 'admin/dashboard/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

/* End of file Dashboard.php */
