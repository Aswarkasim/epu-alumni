<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<style>
  td {
    padding-bottom: 10px;
    padding-top: 10px;
  }
</style>
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <br><a href="<?= base_url($back); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
        <a href="<?= base_url($edit . $alumni->id_alumni); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
        <a href="<?= base_url($delete . $alumni->id_alumni); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i> Hapus</a><br><br>
        <h3 class="box-title"><?= $title ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#dataPribadi" data-toggle="tab" aria-expanded="true">Data Pribadi</a></li>
            <li class=""><a href="#dataKuliah" data-toggle="tab" aria-expanded="false">Data Kuliah</a></li>
            <li class=""><a href="#pesankesan" data-toggle="tab" aria-expanded="true">Pesan & Kesan</a></li>

          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="dataPribadi">
              <table>
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
                  <td>: Rp. <?= nominal($alumni->penghasilan) ?></td>
                </tr>

                <tr>
                  <td align="left">Foto</td>

                </tr>

              </table>
              <td><img class="thumbnail" src="<?= base_url($alumni->gambar) ?>" width="300px" alt=""></td>
            </div>
            <div class="tab-pane " id="pesankesan">
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

            <!-- /.tab-pane -->
            <div class="tab-pane" id="dataKuliah">
              <table>
                <tr>
                  <td width="150px" align="left">NIM</td>
                  <td>: <?= $alumni->nim; ?></td>
                </tr>

                <tr>
                  <td align="left">Angkatan</td>
                  <td>: <?= $alumni->angkatan ?></td>
                </tr>

                <tr>
                  <td align="left">Program Studi</td>
                  <td>: <?= $alumni->program_studi ?></td>
                </tr>

                <tr>
                  <td align="left">Judul Skripsi</td>
                  <td>: <?= $alumni->judul_skripsi ?></td>
                </tr>

                <tr>
                  <td align="left">Tahun Lulus</td>
                  <td>: <?= $alumni->tahun_lulus ?></td>
                </tr>

                <tr>
                  <td align="left">Tahun Wisuda</td>
                  <td>: <?= $alumni->tahun_wisuda ?></td>
                </tr>

                <tr>
                  <td align="left">IPK</td>
                  <td>: <?= $alumni->ipk ?></td>
                </tr>

                <tr>
                  <td align="left">No. Ijazah</td>
                  <td>: <?= $alumni->no_ijazah ?> </td>

                <tr>
                  <td align="left">Masa Tunggu</td>
                  <td>: <?= $alumni->masa_tunggu ?></td>
                </tr>

                <tr>
                  <td align="left">Kerelevansian</td>
                  <td>: <?= $alumni->kerelevansian ?></td>
                </tr>

              </table>
            </div>

            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->



      </div>

    </div>
    <!-- /.box-body -->
  </div>
</div>