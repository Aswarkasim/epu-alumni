<?php $this->load->view('user/nav'); ?>


<div class="">

  <div class="container">
    <div class="row">
      <div class="col-md-8"><br>
        <div class="form-group">

          <?= validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>', '</div>'); ?>

        </div>

        <form action="<?= base_url('user/kesan/edit'); ?>" method="POST">
          <div class="form-group">
            <div class="label"><strong> Kesan</strong></div>
            <textarea name="kesan" class="form-control" id="editor1" cols="30" rows="10"><?= $alumni->kesan; ?></textarea>
          </div>

          <div class="form-group">
            <div class="label"><strong> Pesan</strong></div>
            <textarea name="pesan" class="form-control" id="editor2" cols="30" rows="10"><?= $alumni->pesan; ?></textarea>
          </div>



          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <a href="<?= base_url('user/pribadi'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<script src="<?= base_url('assets/') ?>js/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor1");
  CKEDITOR.replace("editor2");
</script>