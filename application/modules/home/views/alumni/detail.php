<div class="container">

  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?php if ($alumni->gambar == '') {
                                                                            echo base_url('assets/uploads/avatar-default.png');
                                                                          } else {
                                                                            echo base_url($alumni->gambar);
                                                                          } ?>" alt="User profile picture">
            <br>
            <h3 class="profile-username text-center"><?= $alumni->namalengkap; ?></h3>

            <p class="text-muted text-center"><?= $alumni->id_alumni; ?></p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Angkatan</b> <a class="pull-right"><?= $alumni->angkatan; ?></a>
              </li>
              <li class="list-group-item">
                <b>Pekerjaan</b> <a class="pull-right"><?= $alumni->pekerjaan; ?></a>
              </li>
            </ul>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <br>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pesan & Kesan</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data Kuliah</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Data Pribadi</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <strong>
              <p>
                <h3>Data Kuliah</h3>
              </p>
              <table cellpadding="10px">
                <tr>
                  <td width="150px" align="left">NIM</td>
                  <td>: <?= $alumni->id_alumni; ?></td>
                </tr>

                <tr>
                  <td align="left">Angkatan</td>
                  <td>: <?= $alumni->angkatan; ?></td>
                </tr>

                <tr>
                  <td align="left">Program Studi</td>
                  <td>: <?= $alumni->program_studi; ?></td>
                </tr>

                <tr>
                  <td align="left">Judul Skripsi</td>
                  <td>: <?= $alumni->judul_skripsi; ?></td>
                </tr>

                <tr>
                  <td align="left">Tahun Lulus</td>
                  <td>: <?= $alumni->tahun_lulus; ?></td>
                </tr>

                <tr>
                  <td align="left">Tahun Wisuda</td>
                  <td>: <?= $alumni->tahun_wisuda; ?></td>
                </tr>

                <tr>
                  <td align="left">IPK</td>
                  <td>: <?= $alumni->ipk; ?></td>
                </tr>

                <tr>
                  <td align="left">No. Ijazah</td>
                  <td>: <?= $alumni->no_ijazah; ?>

                <tr>
                  <td align="left">Masa Tunggu</td>
                  <td>: <?= $alumni->masa_tunggu; ?></td>
                </tr>

                <tr>
                  <td align="left">Kerelevansian</td>
                  <td>: <?= $alumni->kerelevansian; ?></td>
                </tr>

              </table>

            </strong>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="container-fluid">
              <strong>
                <p>
                  <h3>Data Pribadi</h3>
                </p>
                <table cellpadding="10px">
                  <tr>
                    <td width="150px" align="left">Nama</td>
                    <td>: <?= $alumni->namalengkap; ?></td>
                  </tr>

                  <tr>
                    <td align="left">Jenis Kelamin</td>
                    <td>: <?= $alumni->gender; ?></td>
                  </tr>

                  <tr>
                    <td align="left">Tempat Lahir</td>
                    <td>: <?= $alumni->tempat_lahir; ?></td>
                  </tr>

                  <tr>
                    <td align="left">Tanggal Lahir</td>
                    <td>: <?= $alumni->tanggal_lahir; ?></td>
                  </tr>

                  <tr>
                    <td align="left">Handphone</td>
                    <td>: <?= $alumni->nohp; ?></td>
                  </tr>

                  <tr>
                    <td align="left">Pekerjaan</td>
                    <td>: <?= $alumni->pekerjaan; ?></td>
                  </tr>

                  <tr>
                    <td align="left">Penghasilan</td>
                    <td>: <?= $alumni->penghasilan; ?></td>
                  </tr>

                </table>
              </strong>
            </div>
          </div>
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>

</div>