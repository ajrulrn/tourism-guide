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
                        <input type="text" class="form-control border-0" placeholder="Cari lokasi, ex: Labuan Bajo" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-radius: 14px 0 0 14px; box-shadow: none">
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
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-primary">Destinasi</h3>
                            </div>
                            <?php if($this->session->has_userdata(SESSION_KEY) && current_user()->level_id == GUIDE) : ?>
                            <div>
                                <a href="<?= base_url('destination/create'); ?>" class="btn btn-primary btn-sm rounded">Tambah Destinasi</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <?php if(!current_user() || current_user()->level_id == TOURIST) : ?>
                    <?php $this->load->view('partials/__destination_grid') ?>
                <?php else : ?>
                    <?php $this->load->view('partials/__destination_list') ?>
                <?php endif; ?>
            </div>
                    
            <?php if ($this->session->flashdata('alert_destination')) : ?>
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11; width:100%;">
                <div class="toast show justify-content-center align-items-center text-white mx-aut bg-<?= $this->session->flashdata('alert_destination')['status']; ?> border-0" role="alert" aria-live="assertive" aria-atomic="true" style="width:100%">
                    <div class="d-flex">
                        <div class="toast-body"><?= $this->session->flashdata('alert_destination')['value']; ?></div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
        </div>
    </div>
</div>

<?php $this->load->view('partials/_footer'); ?>