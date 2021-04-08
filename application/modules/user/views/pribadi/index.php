<?php $this->load->view('user/nav'); ?>

<div class="">

  <div class="container">
    <style>
      td {
        padding-bottom: 10px;
        padding-top: 10px;
      }
    </style>
    <strong>
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
          <td align="left">Kategori Pekerjaan</td>
          <td>: <?= $alumni->nama_kategori_pekerjaan; ?></td>
        </tr>

        <tr>
          <td align="left">Penghasilan</td>
          <td>: Rp. <?= nominal($alumni->penghasilan) ?></td>
        </tr>

      </table>
      <a href="<?= base_url('user/pribadi/edit'); ?>" class="btn btn-md btn-primary"><i class="fa fa-edit"></i> Edit</a>
    </strong>

  </div>
</div>