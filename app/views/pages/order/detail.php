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
                                    <a href="<?= base_url('order'); ?>">
                                        <i class="nav-icon" data-feather="arrow-left"></i>
                                    </a>
                                    Detail Pesanan
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
                    <div class="card p-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-12">
                                <p class="m-0 text-secondary fw-bold"><?= strtoupper(substr(md5($transaction->id), 23, 8)); ?></p>
                                <p class="m-0 text-secondary"><?= $transaction->destination; ?></p>
                                <p class="m-0 text-secondary"><?= $transaction->num_of_tourist; ?> Person</p>
                                <p class="m-0 text-secondary">Rp<?= number_format(($transaction->price * $transaction->num_of_tourist) - ($transaction->price * $transaction->num_of_tourist) * 5 /100, 0, '', ','); ?></p>
                                <p class="m-0 text-secondary"><?= date('d M Y', strtotime($transaction->trip_date)); ?></p>
                                <p class="m-0 text-secondary fs-6 badge 
                                <?php if ($transaction->status == 'SUCCESS' || $transaction->status == 'Selesai') : ?>
                                bg-light-success text-dark-success
                                <?php elseif($transaction->status == 'Dibatalkan') : ?>
                                bg-light-danger text-dark-danger
                                <?php else : ?>
                                bg-light-warning text-dark-warning
                                <?php endif; ?>
                                "><?= $transaction->status; ?></p>
                                <?php if($transaction->status != 'SUCCESS' && $transaction->status != 'Dibatalkan') : ?>
                                    <div class="d-grid mt-3">
                                        <?php if ($transaction->status == 'Siap diproses') : ?>
                                        <a href="<?= base_url('order/cancel/').$transaction->id; ?>" class="btn btn-sm rounded border-secondary">Batalkan</a>
                                        <a href="<?= base_url('order/start/').$transaction->id; ?>" class="mt-1 btn btn-primary btn-sm rounded">Mulai Perjalanan</a>
                                        <?php endif; ?>
                                        <?php if ($transaction->status == 'Sedang Berlangsung') : ?>
                                        <a href="<?= base_url('order/stop/').$transaction->id; ?>" class="mt-1 btn btn-danger btn-sm rounded">Akhiri Perjalanan</a>
                                        <?php endif; ?>
                                        <?php if($transaction->status == 'Siap diproses' || $transaction->status == 'Sedang Berlangsung') : ?>
                                        <hr>
                                        <a href="<?= base_url('chat/detail/').$transaction->user_id; ?>" class="btn border-secondary btn-sm rounded">
                                            <i data-feather="message-circle" class="nav-icon icon-xs pb-1"></i> Chat
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>