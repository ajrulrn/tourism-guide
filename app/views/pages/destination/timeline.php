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
                                <h3 class="mb-0 fw-bold text-white">
                                    <a href="<?= base_url('destination/view/').$destination->id; ?>" class="text-white">
                                        <i class="nav-icon" data-feather="arrow-left"></i>
                                    </a>  
                                    Atur Timeline
                                </h3>
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
                            <form action="<?= base_url('destination/save_timeline/'.$destination->id) ?>" method="post">
                                <?php for($i = 0; $i < $destination->duration; $i++) : ?>
                                <h4>Hari <?= $i+1; ?></h4>
                                <div class="mb-2 wrapper-timeline-<?= $i+1; ?>">
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label for="">Jam</label>
                                            <input type="text" class="form-control" name="times<?= $i+1; ?>[]">
                                        </div>
                                        <div class="col-6">
                                            <label for="">Desc</label>
                                            <input type="text" class="form-control" name="desc<?= $i+1; ?>[]">
                                        </div>
                                        <div class="col-1 ps-0 text-end d-gri">
                                            <button type="button" class="btn btn-primary mt-5 btn-add-timeline" data-id="<?= $i+1; ?>">+</button>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>
                                <div class="d-grid mt-3">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <!-- <div class="card">
                                        <div class="card-body"> -->
                                            <!-- <h6 class="card-title">Timeline</h6> -->
                                            <div id="content">
                                                <!-- <div class="timeline">
                                                    <div class="event"></div>
                                                </div> -->
                                                <!-- <div class="parent">

                                                    <div class="testing"></div>
                                                </div> -->
                                                <ul class="timeline">
                                                    <li class="event pt-0" style="padding-bottom: 80px;">
                                                        <p>dwq</p>
                                                    </li>
                                                </ul>
                                                <ul class="timeline">
                                                    <li class="event" data-date="12:30 - 1:00pm">
                                                        <h3>Registration</h3>
                                                        <p>Get here on time, it's first come first serve. Be late, get turned away.</p>
                                                    </li>
                                                    <li class="event" data-date="2:30 - 4:00pm">
                                                        <!-- <h3>Opening Ceremony</h3> -->
                                                        <p>Get ready for an exciting event, this will kick off in amazing fashion with MOP &amp; Busta Rhymes as an opening show.</p>
                                                    </li>
                                                    <li class="event" data-date="5:00 - 8:00pm">
                                                        <h3>Main Event</h3>
                                                        <p>This is where it all goes down. You will compete head to head with your friends and rivals. Get ready!</p>
                                                    </li>
                                                    <li class="event" data-date="8:30 - 9:30pm">
                                                        <h3>Closing Ceremony</h3>
                                                        <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <!-- </div>
                                    </div> -->
                                </div>
                            </div>
                                
                            <!-- <form action="<?= base_url('admin/destination/tes') ?>" method="post">
                                <input type="text" name="times1[]" placeholder="waktu 1">
                                <input type="text" name="times1[]" placeholder="waktu 1">
                                <input type="text" name="desc1[]">
                                <input type="text" name="desc1[]">
                                <input type="text" name="times1[]" placeholder="waktu 1">
                                <input type="text" name="times2[]" placeholder="waktu 2">
                                <input type="text" name="desc1[]">
                                <input type="text" name="desc2[]">
                                <button type="submit">Submit</button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>