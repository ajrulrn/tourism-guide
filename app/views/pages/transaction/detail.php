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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-primary">
                                    <a href="<?= base_url('transaction'); ?>">
                                        <i class="nav-icon" data-feather="arrow-left"></i>
                                    </a>
                                    Detail Transaksi
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <!-- <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="table-responsive pt-4">
                            <table class="table text-nowrap">
                                <thead class="table-light">
                                    <tr>
                                    <th>Invoice</th>
                                    <th>Destination</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">
                                                    <h5 class="fw-bold mb-1">
                                                            IV4564654
                                                    </h5>
                                        </td>
                                        <td class="align-middle">
                                            Kampung Bambu
                                        </td>
                                        <td class="align-middle">Rp500,000,-</td>
                                        <td class="align-middle">
                                            <span class="badge bg-light-info text-dark-info">Finish</span>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
                <div class="col-12 mb-3">
                    <a href="<?= base_url('transaction/detail'); ?>" class="text-decoration-none text-white">
                        <div class="card p-3 borde border-primary">
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <p class="m-0 text-secondary fw-bold">IV#4564</p>
                                    <p class="m-0 text-secondary">Raja Ampat</p>
                                    <p class="m-0 text-secondary">2 Person</p>
                                    <p class="m-0 text-secondary">Rp123,000</p>
                                    <p class="m-0 text-secondary fs-6 badge bg-light-warning text-dark-warning">Menunggu Pembayaran</p>
                                    <div class="d-grid mt-2">
                                        <a href="#" class="btn btn-primary btn-sm rounded">Bayar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 mb-3">
                    <a href="<?= base_url('transaction/detail'); ?>" class="text-decoration-none text-white">
                        <div class="card p-3 borde border-primary">
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <p class="m-0 text-secondary fw-bold">IV#4564</p>
                                    <p class="m-0 text-secondary">Raja Ampat</p>
                                    <p class="m-0 text-secondary">2 Person</p>
                                    <p class="m-0 text-secondary">Rp123,000</p>
                                    <p class="m-0 text-secondary fs-6 badge bg-light-success text-dark-success">Selesai</p>
                                    <div class="d-grid mt-2">
                                        <a href="#" class="btn btn-primary btn-sm rounded">Beri Ulasan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 mb-3">
                    <a href="<?= base_url('transaction/detail'); ?>" class="text-decoration-none text-white">
                        <div class="card p-3 borde border-primary">
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <p class="m-0 text-secondary fw-bold">IV#4564</p>
                                    <p class="m-0 text-secondary">Raja Ampat</p>
                                    <p class="m-0 text-secondary">2 Person</p>
                                    <p class="m-0 text-secondary">Rp123,000</p>
                                    <p class="m-0 text-secondary fs-6 badge bg-light-warning text-dark-warning">Sedang Berlangsung</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>