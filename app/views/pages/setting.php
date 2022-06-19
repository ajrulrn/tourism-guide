<?php $this->load->view('partials/_header'); ?>

<div id="db-wrapper">    
    <!-- navbar vertical -->
    <?php $this->load->view('partials/_sidebar'); ?>
    <!-- Page content -->
    <div id="page-content" class="">
        <?php $this->load->view('partials/_topbar'); ?>
        <!-- Container fluid -->
        <div class="bg-primar pt-8 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            <?php if($this->session->has_userdata(SESSION_KEY)) : ?>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-primary">Setting</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-12 mb-3">
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card p-3 borde border-primary">
                            <form action="<?= base_url('setting/change_password/').current_user()->username; ?>" method="post">
                                <div class="row form-group">
                                    <div class="col-12">
                                        <label for="" class="form-label">Password Lama</label>
                                        <input type="password" name="old_password" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group mt-3">
                                    <div class="col-12">
                                        <label for="" class="form-label">Password Baru</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group mt-3">
                                    <div class="col-12">
                                        <label for="" class="form-label">Konfirmasi Password</label>
                                        <input type="password" name="confirm_password" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 d-grid">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </a>
                </div>
            </div>
            <?php else : ?>
            <div class="row mt-20 justify-content-center">
                <div class="col-9 text-center">
                    <div class="card p-5">

                        <h2 class="text-secondary fw-normal m-0">Silahkan Login <br>Terlebih Dahulu</h2>
                        <div class="d-grid mt-3">
                            <a href="<?= base_url('login'); ?>" class="btn btn-primary">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>