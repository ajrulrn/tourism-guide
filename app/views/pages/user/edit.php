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
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-primary">
                                    <a href="<?= base_url('user'); ?>">
                                        <i class="nav-icon" data-feather="arrow-left"></i>
                                    </a>
                                    Detail User
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <!-- <div class="col-md-12 col-12">
                    <?= $this->session->userdata('admin_user'); ?>
                    <div class="card">
                        <div class="table-responsive pt-4">
                            <table class="table text-nowrap">
                                <thead class="table-light">
                                    <tr>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $index => $user) : ?>
                                    <tr>
                                        <td class="align-middle">
                                                    <h5 class="fw-bold mb-1">
                                                            <?= $user->name; ?>
                                                    </h5>
                                        </td>
                                        <td class="align-middle">
                                            <?= $user->level; ?>
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge <?= $user->is_activate ? 'bg-light-info text-dark-info' : 'bg-light-warning text-dark-warning' ?>"><?= $user->is_activate ? 'Active' : 'Inactive' ?></span>
                                        </td>
                                        <td class="align-middle text-dark">
                                            <div class="dropdown dropstart">
                                                <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamThree" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-xxs" data-feather="more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownTeamThree">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
                <div class="col-12 mb-1">
                    <div class="card text-secondary">
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <p class="m-0 fs-5 fw-bold text-primary"><?= $user->name; ?></p>
                                    <p class="m-0 fs-6"><?= $user->level_id == ADMIN ? 'Admin' : ($user->level_id == GUIDE ? 'Guide' : 'Turis'); ?></p>
                                    <p class="m-0 fs-6"><?= $user->email; ?></p>
                                    <?php if ($user->is_activate) : ?>
                                    <p class="m-0 fs-6 badge bg-light-success text-dark-success">Aktif</p>
                                    <?php else : ?>
                                    <p class="m-0 fs-6 badge bg-light-warning text-dark-warning">Tidak Aktif</p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 border-top pt-3 mt-4 d-grid">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal-2">...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog fixed-bottom mb-0 mx-0" role="document" style="max-width:100%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengaturan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="row">
                    <?php if ($user->is_activate) : ?>
                    <div class="col-12 d-grid border-bottom">
                        <a href="<?= base_url('user/unactivate/').$user->id; ?>" class="btn text-start">Nonaktifkan</a>
                    </div>
                    <?php endif; ?>
                    <?php if (!$user->is_activate) : ?>
                    <div class="col-12 d-grid border-bottom">
                        <a href="<?= base_url('user/activate/').$user->id; ?>" class="btn text-start">Aktifkan</a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>