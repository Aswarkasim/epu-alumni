<div class="row">

  <div class="col-md-6">

    <div class="box box-widget">
      <div class="box-header with-border">
        <a href="<?= base_url('admin/lowongan') ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> List Lowongan</a>

        <!-- Tombol Aktif Post -->
        <?php if ($lowongan->is_active == 0) { ?>
          <a href="<?= base_url('admin/lowongan/activePost/' . $lowongan->id_lowongan) ?>" class="btn btn-success tombol-aktif"><i class="fa fa-power-off"></i> Aktifkan</a>
        <?php  } else { ?>
          <a href="<?= base_url('admin/lowongan/activePost/' . $lowongan->id_lowongan) ?>" class="btn btn-danger tombol-non-aktif"><i class="fa fa-power-off"></i> Non Aktifkan</a>
        <?php   } ?>
        <!-- End Tombol aktif post -->

        <span>
          <h3><strong><?= $lowongan->nama_lowongan; ?></strong></h3>
          <span>dipublikasikan pada - <?= $lowongan->date_created; ?></span>
        </span>

        <img class="img-responsive pad" src="<?= base_url($lowongan->gambar) ?>" alt="Photo" />
        <span>
          <h3><strong><?= $lowongan->nama_lowongan; ?></strong></h3>
          <span>dipublikasikan pada - <?= $lowongan->date_created; ?></span>
        </span>
        <p><?= $lowongan->deskripsi; ?></p>



      </div>
    </div>
  </div>
</div>