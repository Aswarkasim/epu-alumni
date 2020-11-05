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

      <a href="<?= base_url('user/kuliah/edit'); ?>" class="btn btn-md btn-primary"><i class="fa fa-edit"></i> Edit</a>
    </strong>

  </div>
</div>