<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                ?>

                <form action="<?= base_url($add) ?>" method="post">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Username</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="username_alumni" placeholder="Username" type="text" value="<?= set_value('username_alumni') ?>">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>NIM</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="id_alumni" placeholder="NIM" type="text" value="<?= set_value('nim') ?>">
              </div>
            </div>
          </div> -->



                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Nama Lengkap</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="namalengkap" placeholder="Nama Lengkap" type="text" value="<?= set_value('namalengkap') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Email</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="email" placeholder="Email" type="text" value="<?= set_value('email') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Gender</strong></label>
                            </div>
                            <div class="col-md-8">
                                <select name="gender" required class="form-control" id="">
                                    <option value="">--Gender--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Angkatan</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="angkatan" placeholder="Angkatan" type="text" value="<?= set_value('angkatan') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Tahun Lulus</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="tahun_lulus" placeholder="Tahun Lulus" type="text" value="<?= set_value('tahun_lulus') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Masa Tunggu</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="masa_tunggu" placeholder="Masa Tunggu" type="text" value="<?= set_value('masa_tunggu') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Pekerjaan</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="pekerjaan" placeholder="Pekerjaan" type="text" value="<?= set_value('pekerjaan') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Pekerjaan Pertama</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="pekerjaan_pertama" placeholder="Pekerjaan Pertama" type="text" value="<?= set_value('pekerjaan_pertama') ?>">
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword" class="pull-right"><strong> Password</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="password" placeholder="Password" type="password">
                                <small>Password minimal 6 karakter</small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword" class="pull-right"><strong> Ketik Ulang Password</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="re_password" placeholder="Password" type="Ketik ulang password">
                                <small>Masukkan ulang password</small>
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



            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>