<hr>
<footer class="footer">
  <div class="container">
    <span class="text-muted"><a href="<?= base_url('admin/auth'); ?>">admin log</a> Sistem Informasi Alumni JPTE</span>
    <span class="pull-right">
      <?php if ($this->session->userdata('id_alumni')) { ?>
        <a href="<?= base_url('home/auth/logout'); ?>" class="btn btn-secondary tombol-logout"><i class="fa fa-sign-out"></i> Logout</a>
      <?php } ?>
    </span>
  </div>
</footer>
<!-- footer part end-->
<!-- custom js -->
<script src="<?= base_url('assets/home/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/') ?>js/mySwal.js"></script>

</body>

</html>