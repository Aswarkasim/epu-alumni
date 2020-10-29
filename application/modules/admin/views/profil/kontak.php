<div class="row">
  <div class="col-md-8">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><i class="fa fa-building"></i><strong> <?= $title ?></strong></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <!-- /.box-header -->
        <div class="box-body">

          <?php
          echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
          ?>

          <form action="<?= base_url('admin/profil/kontak') ?>" method="post">

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                  <label for="" class="pull-right">Nama Pimpinan</label>
                </div>
                <div class="col-md-9">
                  <input type="text" value="<?= $profil->nama_pimpinan ?>" name="nama_pimpinan" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                  <label for="" class="pull-right">Telepon</label>
                </div>
                <div class="col-md-9">
                  <input type="text" value="<?= $profil->telepon ?>" name="telepon" class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                  <label for="" class="pull-right">Email</label>
                </div>
                <div class="col-md-9">
                  <input type="text" value="<?= $profil->email ?>" name="email" class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                  <label for="" class="pull-right">Alamat Lengkap</label>
                </div>
                <div class="col-md-9">
                  <input type="text" value="<?= $profil->alamat ?>" name="alamat" class="form-control">
                </div>
              </div>
            </div>



            <div class="form-group">
              <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-9">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </div>
            </div>

          </form>



        </div>

      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>


<script src="<?= base_url('assets/admin/') ?>bower_components/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editorvisi')
  CKEDITOR.replace('editormisi')
</script>