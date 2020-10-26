 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
 <div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
   <div class="container">
     <a class="navbar-brand" href="<?= base_url(); ?>">
       <img src="<?= base_url('assets/images/logo.png'); ?>" width="70px" alt="">
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarColor01">
       <ul class="navbar-nav mr-auto">

         <li class="nav-item <?php if ($this->uri->segment('2') == 'home') {
                                echo "active";
                              } ?>"><a class="nav-link" href="<?= base_url('home/home'); ?>">Beranda</a></li>
         <li class="nav-item <?php if ($this->uri->segment('2') == 'alumni') {
                                echo "active";
                              } ?>"><a class="nav-link" href="<?= base_url('home/alumni'); ?>">Alumni</a></li>
         <li class="nav-item <?php if ($this->uri->segment('2') == 'berita') {
                                echo "active";
                              } ?>"><a class="nav-link" href="<?= base_url('home/berita'); ?>">Berita</a></li>
         <li class="nav-item <?php if ($this->uri->segment('2') == 'lowongan') {
                                echo "active";
                              } ?>"><a class="nav-link" href="<?= base_url('home/lowongan'); ?>">Lowongan Kerja</a></li>
         <li class="nav-item <?php if ($this->uri->segment('2') == 'galeri') {
                                echo "active";
                              } ?>"><a class="nav-link" href="<?= base_url('home/galeri'); ?>">Galeri</a></li>
         <li class="nav-item <?php if ($this->uri->segment('2') == 'tentang') {
                                echo "active";
                              } ?>"><a class="nav-link" href="<?= base_url('home/tentang'); ?>">Tentang</a></li>
         <li class="nav-item <?php if ($this->uri->segment('2') == 'saran') {
                                echo "saran";
                              } ?>"><a class=" nav-link" href="<?= base_url('home/saran'); ?>">Kontak dan Saran</a></li>

       </ul>
       <form class="form-inline my-2 my-lg-0">


         <?php if ($this->session->userdata('id_alumni')) { ?>
           <a href="<?= base_url('user/pribadi'); ?>" class="btn btn-success">
             <i class="fa fa-user"></i> <?php echo ' &nbsp' . $this->session->userdata('namalengkap') ?>
           </a>
         <?php } else { ?>
           <a href="<?= base_url('home/auth'); ?>" class="btn btn-success">
             <i class="fa fa-sign-in"></i> Login
           </a>
         <?php } ?>
       </form>
     </div>
   </div>
 </nav>