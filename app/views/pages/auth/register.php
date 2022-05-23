<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon/favicon.ico">

<!-- Libs CSS -->

<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/prismjs/themes/prism.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/prismjs/plugins/toolbar/prism-toolbar.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/bootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/dropzone/dist/dropzone.css" >
<link href="<?= base_url(); ?>assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">






<!-- Theme CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/theme.min.css">
  <title>Sign Up | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
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
              <a href="<?= base_url(); ?>index.html"><img src="<?= base_url(); ?>assets/images/brand/logo/logo-primary.svg" class="mb-2" alt=""></a>
              <p class="mb-6">Daftar akun untuk menikmati keindahan alam.</p>

            </div>
            <!-- Form -->
            <form>
              <!-- Username -->
              <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="User Name" required="">
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required="">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm
                    Password</label>
                <input type="password" id="confirm-password" class="form-control" name="password" placeholder="**************" required="">
              </div>
              <!-- Checkbox -->
              <div class="mb-3">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="agreeCheck">
                  <label class="form-check-label" for="agreeCheck"><span
                        class="fs-5">I agree to the <a
                          href="terms-condition-page.html">Terms of
                          Service </a>and
                        <a href="terms-condition-page.html">Privacy Policy.</a></span></label>
                </div>
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">
                    Create Free Account
                  </button>
                </div>

                <div class="d-md-flex justify-content-center mt-4">
                  <div class="mb-2 mb-md-0 text-center">
                    <a href="<?= base_url('login'); ?>" class="fs-5">Already
                        member? Login </a>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <!-- Libs JS -->
<script src="<?= base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/prismjs/components/prism-core.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/prismjs/components/prism-markup.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/dropzone/dist/min/dropzone.min.js"></script>










<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>



<!-- Theme JS -->
<script src="<?= base_url(); ?>assets/js/theme.min.js"></script>
</body>

</html>