<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
      echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
      if (isset($error)) {
        echo '<div class="alert alert-warning">';
        echo $error;
        echo '</div>';
      }
      echo form_open_multipart($add) ?>
      <form action="" method="post">


        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="" class="pull-right">Judul Lowongan</label>
            </div>
            <div class="col-md-9">
              <input type="text" name="nama_lowongan" value="<?= set_value('nama_lowongan') ?>" placeholder="Nama Lowongan" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="" class="pull-right">Perusahaan</label>
            </div>
            <div class="col-md-9">
              <input type="text" name="perusahaan" value="<?= set_value('perushaan') ?>" placeholder="Perushaan" class="form-control">
            </div>
          </div>
        </div>



        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="" class="pull-right">Gambar</label>
            </div>
            <div class="col-md-9">
              <input required type="file" name="gambar" placeholder="Gambar" class="form-control">
            </div>
          </div>
        </div>


        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="" class="pull-right">Deskripsi</label>
            </div>
            <div class="col-md-9">
              <textarea name="deskripsi" id="editor" placeholder="Isi Lowongan" class="form-control"></textarea>
            </div>
          </div>
        </div>


        <div class="form-group">
          <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
              <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>

      </form>
      <?= form_close() ?>
    </div>
    <!-- <div class="col-md-6">

                    </div> -->
  </div>
</div>


<script src="<?= base_url('assets/') ?>js/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script>