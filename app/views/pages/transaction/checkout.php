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
                                <h3 class="mb-0 fw-bold text-primary">Checkout</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-12 mb-3">
                    <a href="<?= base_url('asd'); ?>" class="text-decoration-none text-white">
                        <div class="card p-3">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <p class="m-0 text-secondary fw-bold fs-4"><?= $transaction->destination; ?></p>
                                    <p class="m-0 text-secondary">2 Person</p>
                                    <p class="m-0 text-secondary"><?= date('d M Y', strtotime($transaction->trip_date)); ?></p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="m-0 text-secondary fw-bold fs-5">Rp<?= number_format($transaction->price * $transaction->num_of_tourist, 0, '', ','); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="d-grid mt-3">
                                        <a href="<?= base_url('transaction/pay/').$transaction->id; ?>" class="btn btn-sm rounded btn-primary">Bayar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>