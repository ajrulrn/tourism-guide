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
            <!-- <div class="row">
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
            </div> -->
            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-primary">
                                    <a href="<?= base_url('destination'); ?>">
                                        <i class="nav-icon" data-feather="arrow-left"></i>
                                    </a>
                                    Tambah Destinasi
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
                            <form action="<?= base_url('destination/store'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="wdq">Judul <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="wdq">Harga <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="formFile">Image <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input class="form-control" name="image" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="wdq">Deskripsi <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <textarea cols="30" rows="3" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="wdq">Durasi (hari) <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input type="text" class="form-control" name="duration">
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="wdq">Provinsi <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <select name="province" id="province" class="form-select">
                                            <option value="">--Pilih Provinsi</option>
                                            <?php foreach($provinces as $item) : ?>
                                            <option value="<?= $item->code; ?>"><?= $item->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="wdq">Kota/Kab <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <select name="city" id="city" class="form-select" disabled>
                                            <option value="">--Pilih Kota/Kab</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="wdq">Minimal Turis <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input type="text" class="form-control" name="min_tourist">
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="wdq">Maksimal Turis <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input type="text" class="form-control" name="max_tourist">
                                    </div>
                                </div>
                                <div class="d-grid mt-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-2">Simpan</button>
                                </div>
                                <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog fixed-bottom mb-0 mx-0" role="document" style="max-width:100%;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menambah destinasi ?</h5>
                                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                            </div>
                                            <div class="modal-body pt-0">
                                                <div class="row">
                                                    <div class="col-12 d-grid border-bottom">
                                                        <button type="submit" class="btn text-start">Ya</button>
                                                    </div>
                                                    <div class="col-12 d-grid border-bottom">
                                                        <button type="button" class="btn text-start" data-bs-dismiss="modal">Tidak</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php if ($this->session->flashdata('alert_create_destination')) : ?>
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11; width:100%;">
                <div class="toast show justify-content-center align-items-center text-white mx-aut bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true" style="width:100%">
                    <div class="d-flex">
                        <div class="toast-body"><?= $this->session->flashdata('alert_create_destination'); ?></div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>



<?php $this->load->view('partials/_footer'); ?>