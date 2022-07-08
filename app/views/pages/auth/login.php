<?php $this->load->view('partials/_header'); ?>
  <!-- container -->
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="<?= base_url(); ?>"><h3 class="text-primary">Wamanra</h3></a>
              <p class="mb-6">Masuk untuk melakukan pemesanan.</p>
            </div>
            <!-- Form -->
            <form action="<?= base_url('login/authenticate'); ?>" method="post">
              <!-- Username -->
              <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text" id="email" class="form-control" name="identity" placeholder="Username here" required="">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
                
                <div class="d-md-flex justify-content-center mt-4">
                  <div class="mb-2 mb-md-0 text-center">
                    <a href="<?= base_url('register'); ?>" class="fs-5">Daftar Akun </a>
                  </div>

                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <?php if($this->session->flashdata('alert_login')) : ?>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11; width:100%;">
        <div class="toast show justify-content-center align-items-center text-white mx-aut bg-<?= $this->session->flashdata('alert_login')['status']; ?> border-0" role="alert" aria-live="assertive" aria-atomic="true" style="width:100%">
            <div class="d-flex">
                <div class="toast-body"><?= $this->session->flashdata('alert_login')['value']; ?></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif; ?>
  </div>
  <!-- Scripts -->
  <!-- Libs JS -->
<script src="<?= base_url(); ?>/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/prismjs/components/prism-core.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/prismjs/components/prism-markup.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/dropzone/dist/min/dropzone.min.js"></script>

<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

<!-- Theme JS -->
<script src="<?= base_url(); ?>/assets/js/theme.min.js"></script>
</body>

</html>