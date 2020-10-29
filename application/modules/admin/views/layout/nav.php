<?php

$id_user = $this->session->userdata('id_user');
$role = $this->session->userdata('role');

?>

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>



            <li class="<?php if ($this->uri->segment(2) == "dashboard") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/dashboard')
                                        ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <li class="<?php if ($this->uri->segment(2) == "saran") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/saran')
                                        ?>"><i class="fa fa-ticket"></i> <span>Saran</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-blue">17</small>
                    </span>
                </a></li>


            <li class="treeview <?php if ($this->uri->segment(2) == "profil") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-building"></i> <span>Profil</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(3) == "edit") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/profil/edit') ?>">Profil</a></li>

                    <li class="<?php if ($this->uri->segment(3) == "kontak") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/profil/kontak') ?>">Kontak</a></li>
                </ul>
            </li>

            <li class="<?php if ($this->uri->segment(2) == "alumni") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/alumni')
                                        ?>"><i class="fa fa-graduation-cap"></i> <span>Alumni</span></a></li>

            <li class="<?php if ($this->uri->segment(2) == "lowongan") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/lowongan')
                                        ?>"><i class="fa fa-cubes"></i> <span>Lowongan Kerja</span></a></li>

            <li class="<?php if ($this->uri->segment(2) == "galeri") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/galeri')
                                        ?>"><i class="fa fa-photo"></i> <span>Galeri</span></a></li>



            <li class="treeview <?php if ($this->uri->segment(2) == "berita") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-object-group"></i> <span>Berita</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(3) == "add") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/berita/add') ?>">Tambah Berita</a></li>
                    <li class="<?php if ($this->uri->segment(3) == "index") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/berita/index') ?>">List Berita</a></li>
                </ul>
            </li>



            <li class="treeview <?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-user"></i> <span>Manajemen User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/user') ?>">List User</a></li>
                </ul>
            </li>

            <li class="treeview <?php if ($this->uri->segment(2) == "konfigurasi") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-cogs"></i> <span>Konfigurasi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(3) == "index") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/index') ?>">General</a></li>


                    <li class="<?php if ($this->uri->segment(3) == "banner") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/banner') ?>">Banner</a></li>
                </ul>
            </li>




        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">