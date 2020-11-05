<?php
$id_alumni = $this->session->userdata('id_alumni');
$alumni = $this->Crud_model->listingOne('tbl_alumni', 'id_alumni', $id_alumni);
?>

<div class="jumbotron pt100 pb80">
  <div class="container">

    <div class="row">
      <div class="col-md-2">
        <img src="<?php if ($alumni->gambar == '') {
                    echo base_url('assets/uploads/avatar-default.png');
                  } else {
                    echo
                      base_url($alumni->gambar);
                  } ?>" alt="author" width="100%">

        <p>
          <br>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-edit"></i> Ubah foto
          </button>

        </p>
      </div>
      <div class="col-md-3">
        <h4><strong><?= $alumni->namalengkap ?></strong></h4>
        <h6 class="author-name"><?= 'Angkatan ' . $alumni->angkatan ?></h6>
      </div>
      <p>

      </p>
    </div>

  </div>
</div>





<section id="elements-buttons">
  <div class="container">

    <div class="row">

    </div>

    <div class="row">

      <div class="col-md-10">

        <div class="buttons-tabs-centered">

          <ul class="nav nav-tabs">

            <li class="nav-link <?php if ($this->uri->segment('2') == 'lowongan') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/lowongan'); ?>" role="tab" class="control-item"><strong> Lowongan</strong></a>
            </li>

            <li class="nav-link <?php if ($this->uri->segment('2') == 'kesan') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/kesan'); ?>" role="tab" class="control-item"><strong> Kesan & Pesan</strong></a>
            </li>


            <li class="nav-link <?php if ($this->uri->segment('2') == 'pribadi') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/pribadi'); ?>" role="tab" class="control-item"><strong> Data Pribadi</strong></a>
            </li>
            <li class="nav-link <?php if ($this->uri->segment('2') == 'kuliah') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/kuliah') ?>" role="tab" class="control-item"><strong>Kuliah</strong></a>

            <li class="nav-link <?php if ($this->uri->segment('2') == 'password') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/password') ?>" role="tab" class="control-item"><strong>Ubah Password</strong></a>
            </li>

          </ul>

        </div>

      </div>

    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?= form_open_multipart('user/pribadi/ubahGambar') ?>
      <form action="" method="POST">
        <div class="modal-body">
          <input type="file" name="gambar" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      <? form_close() ?>
    </div>
  </div>
</div>