<?php $this->load->view('user/nav'); ?>


<div class="">

  <div class="container">
    <div class="form-group">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-6">
          <?= validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>', '</div>'); ?>
        </div>
      </div>
    </div>

    <form action="<?= base_url('user/kuliah/edit') ?>" method="POST">
      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
            <label for="" class="pull-right">NIM</label>
          </div>
          <div class="col-md-6">
            <input type="number" class="form-control" disabled value="<?= $alumni->id_alumni; ?>" name="id_alumni" id="">
            <small>* Hubungi admin untuk mengubah NIM</small>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
            <label for="" class="pull-right">Angkatan</label>
          </div>
          <div class="col-md-6">
            <input type="number" class="form-control" name="angkatan" value="<?= $alumni->angkatan; ?>" id="">
          </div>
        </div>
      </div>



      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
            <label for="" class="pull-right">Program Studi</label>
          </div>
          <div class="col-md-6">
            <!-- <input type="text" class="form-control" name="program_studi" value="<?= $alumni->program_studi; ?>" id=""> -->
            <select name="program_studi" id="" class="form-control">
              <option value="">--- Progam Studi ---</option>
              <option value="Pend. Teknik Elektro S1" <?= $alumni->program_studi == 'Pend. Teknik Elektro S1' ? 'selected' : ''; ?>>Pend. Teknik Elektro S1</option>
              <option value="Pend. Teknik Elektro D3" <?= $alumni->program_studi == 'Pend. Teknik Elektro D3' ? 'selected' : ''; ?>>Pend. Teknik Elektro D3</option>
              <option value="Pend. Teknik Informatika dan Komputer S1" <?= $alumni->program_studi == 'Pend. Teknik Informatika dan Komputer S1' ? 'selected' : ''; ?>>Pend. Teknik Informatika dan Komputer S1</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
            <label for="" class="pull-right">Judul Skripsi</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="judul_skripsi" value="<?= $alumni->judul_skripsi; ?>" id="">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
            <label for="" class="pull-right">Tahun Lulus</label>
          </div>
          <div class="col-md-6">
            <input type="number" class="form-control" value="<?= $alumni->tahun_lulus; ?>" name="tahun_lulus" id="">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
            <label for="" class="pull-right">Tahun Wisuda</label>
          </div>
          <div class="col-md-6">
            <input type="number" class="form-control" value="<?= $alumni->tahun_wisuda; ?>" name="tahun_wisuda" id="">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
            <label for="" class="pull-right">IPK</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="ipk" value="<?= $alumni->ipk; ?>" id="">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
            <label for="" class="pull-right">No. Ijazah</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="no_ijazah" value="<?= $alumni->no_ijazah; ?>" id="">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
            <label for="" class="pull-right">Kerelevansian</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="kerelevansian" value="<?= $alumni->kerelevansian; ?>" id="">
          </div>
        </div>
      </div>


      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-6">
            <a href="<?= base_url('user/kuliah'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </form>

  </div>
</div>