<?php $this->load->view('user/nav'); ?>

<div class="">

  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <br>
        <blockquote>
          <h3><strong>Kesan</strong></h3>
        </blockquote>
        <p><?= $alumni->kesan; ?></p>

        <br>
        <blockquote>
          <h3><strong>Pesan</strong></h3>
        </blockquote>
        <p><?= $alumni->pesan; ?></p>

      </div>
    </div>

    <div class="pulll-left">
      <br>
      <a href="<?= base_url('user/kesan/edit'); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
    </div>
  </div>
</div>