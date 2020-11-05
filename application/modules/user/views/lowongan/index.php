<?php $this->load->view('user/nav'); ?>

<div class="">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <br>
        <a href="<?= base_url('user/lowongan/add'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Lowongan</a>
        <br>

        <div class="row">

          <?php foreach ($lowongan as $row) { ?>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="thumb">
                  <img src="<?= base_url($row->gambar); ?>" alt="">
                </div>
                <div class="card-body">
                  <div class="pull-right">
                    <a href="<?= base_url('user/lowongan/edit/' . $row->id_lowongan); ?>"><i class="fa fa-edit fa-2x"></i></a>
                    <a href="<?= base_url('user/lowongan/delete/' . $row->id_lowongan); ?>" class="tombol-hapus"><i class="fa fa-trash fa-2x"></i></a>
                  </div>
                  <br>
                  <h4><strong><?= $row->nama_lowongan; ?></strong></h4>
                  <p class="card-text"><?= character_limiter($row->deskripsi, '10') ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?= base_url('home/lowongan/detail/' . $row->slug); ?>" class="btn btn-primary">Selengkapnya</a>

                  </div>

                </div>
              </div>
            </div>
          <?php } ?>


        </div>

      </div>
    </div>

  </div>
</div>