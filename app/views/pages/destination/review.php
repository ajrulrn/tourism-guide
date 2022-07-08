<?php $this->load->view('partials/_header'); ?>

<div id="db-wrapper">    
    <!-- navbar vertical -->
    <?php $this->load->view('partials/_sidebar'); ?>
    <!-- Page content -->
    <div id="page-content">
        <?php $this->load->view('partials/_topbar'); ?>
        <!-- Container fluid -->
        <div class="bg-primar pt-8 pb-21"></div>
        <div class="container-fluid mt-n22 px-6 pb-20">
            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-12">
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-primary">
                                    <a href="<?= base_url('destination/detail/').$destination->id; ?>">
                                        <i class="nav-icon" data-feather="arrow-left"></i>
                                    </a>
                                    Ulasan - <?= $destination->title; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <?php foreach($reviews as $index => $review) : ?>
                                <div class="col-12 <?= $index+1 < count($reviews) ? 'py-2 border-bottom' : 'pt-2';  ?>">
                                    <p class="m-0 fs-6 fw-bold"><?= $review->user; ?></p>
                                    <p class="m-0 fs-6"><?= $review->feedback; ?></p>
                                    <?php for ($star = 1; $star <= $review->rate; $star++) :?>
                                    <svg class="pb-1 mr-0 text-warning" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg> 
                                    <?php endfor; ?>
                                    <p class="m-0 fs-6"><?= date('d M Y', strtotime($review->inserted_at)); ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/_footer'); ?>