<?php $this->load->view('partials/_header'); ?>

<div id="db-wrapper">    
    <!-- navbar vertical -->
    <?php $this->load->view('partials/_sidebar'); ?>
    <!-- Page content -->
    <div id="page-content">
        <?php $this->load->view('partials/_topbar'); ?>
        <!-- Container fluid -->
        <div class="bg-primar pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-whit">Dashboard</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                    <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Destinasi</h4>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold"><?= $total_destinations; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                    <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Guide</h4>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold"><?= $total_guides; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Turis</h4>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold"><?= $total_tourists; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Transaksi</h4>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold"><?= $total_transactions; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row  -->
            <div class="row mt-6">
                <div class="col-12">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white border-bottom-0 py-4">
                            <h4 class="mb-0">Top Destinasi</h4>
                        </div>
                        <!-- table  -->
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                    <th>Destinasi</th>
                                    <th>Trip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($most_visited_destinations as $item) : ?>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flexalign-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1"><?= $item->title; ?></h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle"><?= $item->total; ?>x</td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row my-6">
                <div class="col-12">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white border-bottom-0 py-4">
                            <h4 class="mb-0">Transaksi Terakhir</h4>
                        </div>
                        <!-- table  -->
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                    <th>ID</th>
                                    <th>Subtotal</th>
                                    <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($latest_transactions as $item) : ?>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flexalign-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1"><?= strtoupper(substr(md5($item->id), 23, 8)); ?></h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">Rp<?= number_format($item->subtotal, 0, '', ','); ?></td>
                                        <td class="align-middle">
                                            <?php if($item->status == 'SUCCESS') : ?>
                                            <span class="badge bg-success">Sukses</span>
                                            <?php elseif($item->status == 'Batal') : ?>
                                            <span class="badge bg-danger"><?= $item->status; ?></span>
                                            <?php else : ?>
                                            <span class="badge bg-warning"><?= $item->status; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>