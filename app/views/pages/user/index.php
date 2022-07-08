<?php $this->load->view('partials/_header'); ?>

<div id="db-wrapper">    
    <!-- navbar vertical -->
    <?php $this->load->view('partials/_sidebar'); ?>
    <!-- Page content -->
    <div id="page-content">
        <?php $this->load->view('partials/_topbar'); ?>
        <!-- Container fluid -->
        <div class="bg-primar pt-8 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3" style="border-radius: 14px; box-shadow:3px 2px 40px 3px #ccc !important">
                        <input type="text" class="form-control border-0" placeholder="Cari user, ex: admin" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-radius: 14px 0 0 14px; box-shadow: none">
                        <button class="btn bg-white" type="button" id="button-addon2" style="border-radius: 0 14px 14px 0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-primary">User</h3>
                            </div>
                            <?php if($this->session->has_userdata(SESSION_KEY) && current_user()->level_id == ADMIN) : ?>
                            <div>
                                <a href="<?= base_url('user/create'); ?>" class="btn btn-primary btn-sm rounded">Tambah User</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <?= $this->session->userdata('admin_user'); ?>
                <?php foreach ($users as $user) : ?>
                <div class="col-12 mb-1">
                    <a href="<?= base_url('user/edit/').$user->id; ?>">
                        <div class="card text-secondary">
                            <div class="card-body">
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <p class="m-0 fs-5 fw-bold text-primary"><?= $user->name; ?></p>
                                        <p class="m-0 fs-6"><?= $user->level_id == ADMIN ? 'Admin' : ($user->level_id == GUIDE ? 'Guide' : 'Turis'); ?></p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <?php if ($user->is_activate) : ?>
                                        <p class="m-0 fs-6 badge bg-light-success text-dark-success">Aktif</p>
                                        <?php else : ?>
                                        <p class="m-0 fs-6 badge bg-light-warning text-dark-warning">Tidak Aktif</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>