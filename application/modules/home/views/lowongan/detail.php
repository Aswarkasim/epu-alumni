<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h2 class="mt-4"><?= $lowongan->nama_lowongan; ?></h2>

      <hr>
      <!-- Preview Image -->
      <img class="img-fluid rounded" src="<?= base_url($lowongan->gambar); ?>" alt="">

      <hr>
      <h4><strong><?= $lowongan->perusahaan; ?></strong></h4>
      <p><?= $lowongan->deskripsi; ?></p>

      <hr>


    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Lowongan</h5>
        <div class="card-body">
          <?php foreach ($lowonganList as $row) { ?>
            <div class="input-group">
              <a href="<?= base_url('home/lowongan/detail/' . $row->slug); ?>">
                <h5><strong><?= $row->nama_lowongan; ?></strong></h5>
              </a><br>
              <p><?= character_limiter($row->deskripsi, '50') ?></p>
            </div>
          <?php } ?>
        </div>
      </div>


      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Berita</h5>
        <div class="card-body">
          <?php foreach ($berita as $row) { ?>
            <div class="input-group">
              <a href="<?= base_url('home/berita/detail/' . $row->slug); ?>">
                <h5><strong><?= $row->judul_berita; ?></strong></h5>
              </a><br>
              <p><?= character_limiter($row->isi, '50') ?></p>
            </div>
          <?php } ?>
        </div>
      </div>



    </div>

  </div>
  <!-- /.row -->

</div>