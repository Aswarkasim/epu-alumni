<div class="container">

  <div class="row">

    <?php $id_alumni = $this->session->userdata('id_alumni');
    foreach ($alumni as $row) {
      if (($row->id_alumni) != $id_alumni) { ?>
        <div class="col-md-4">
          <div class="card-4 shadow-sm">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <img src="<?php if ($row->gambar == '') {
                              echo base_url('assets/uploads/avatar-default.png');
                            } else {
                              echo
                                base_url($row->gambar);
                            } ?>" width="100%" alt="">
                </div>
                <div class="col-md-9">
                  <h4><a href="<?= base_url('home/alumni/detail/' . $row->id_alumni); ?>"><strong><?= $row->namalengkap; ?></strong></a></h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Angkatan <?= $row->angkatan; ?></small>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

    <?php }
    } ?>

  </div>
</div>