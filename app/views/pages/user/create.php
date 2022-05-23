<?php $this->load->view('partials/_header'); ?>

<div id="db-wrapper">    
    <!-- navbar vertical -->
    <?php $this->load->view('partials/_sidebar'); ?>
    <!-- Page content -->
    <div id="page-content">
        <?php $this->load->view('partials/_topbar'); ?>
        <!-- Container fluid -->
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-white">Create User</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('admin/user/store') ?>" method="post">
                                <div class="form-group row">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-6">
                                        <label for="username">Username <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-12">
                                        <label for="password">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="confirmation_password">Confirmation Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="confirmation_password" name="confirmation_password">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="level">Level <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <select name="level" id="level" class="form-select">
                                            <option value="">--Choose</option>
                                            <?php foreach($levels as $level) : ?>
                                            <option value="<?= $level->id; ?>"><?= $level->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col d-grid">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <a href="<?= base_url('admin/user'); ?>" class="btn btn-outline-secondary btn-sm my-3"><i data-feather="arrow-left" class="nav-icon icon-xs"></i> Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group mt-2">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group mt-2">
                    <input type="password" class="form-control" placeholder="Confirmation Password">
                </div>
                <div class="form-group mt-2">
                    <select name="" id="" class="form-select">
                        <option value="">Choose Level</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" style="width: 100%;">Save</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>