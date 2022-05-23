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
            <div class="fixed-bottom">
                <div class="card p-4">
                    <div class="row d-flex align-items-center">
                        <div class="col-6">
                            <p class="m-0 text-primary fw-bold">Rp <?= number_format($destination->price, 0, '', ','); ?>/pax</p>
                            <p class="m-0 fs-6">Minimum <?= $destination->min_tourist; ?> person</p>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-12">
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-primary">
                                    <a href="<?= base_url('destination'); ?>">
                                        <i class="nav-icon" data-feather="arrow-left"></i>
                                    </a>
                                    Detail Destinasi
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
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Duration</th>
                                    <th>Min Tourist</th>
                                    <th>Max Tourist</th>
                                    <th>Visitor</th>
                                    <th>Status</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($destinations as $index => $destination) : ?>
                                    <tr>
                                        <td class="align-middle">
                                            <h5 class="fw-bold mb-1"><?= $destination->title; ?></h5>
                                        </td>
                                        <td class="align-middle"><?= $destination->city; ?></td>
                                        <td class="align-middle"><?= $destination->price; ?></td>
                                        <td class="align-middle"><?= $destination->description; ?></td>
                                        <td class="align-middle"><?= $destination->duration; ?> Day</td>
                                        <td class="align-middle"><?= $destination->min_tourist; ?></td>
                                        <td class="align-middle"><?= $destination->max_tourist; ?></td>
                                        <td class="align-middle">45,646</td>
                                        <td class="align-middle">
                                            <span class="badge <?= $destination->is_published ? 'bg-light-info text-dark-info' : 'bg-light-warning text-dark-warning' ?>">
                                                <?= $destination->is_published ? 'Published' : 'Unpublished' ?>
                                            </span>
                                        </td>
                                        <td class="align-middle text-dark">
                                            <div class="dropdown dropstart">
                                                <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamThree" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-xxs" data-feather="more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownTeamThree">
                                                    <?php if (!$destination->is_published) : ?>
                                                        <a class="dropdown-item" href="<?= base_url('admin/destination/timeline/').$destination->id; ?>">Set Timeline</a>
                                                    <?php endif; ?>
                                                    <a class="dropdown-item" href="<?= base_url('assets/images/destinations/').$destination->image; ?>" target="_blank">View Image</a>
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
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="<?= base_url('assets/images/destinations/').$destination->image; ?>" alt="" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-7">
                                    <p class="m-0 fs-4 fw-bold"><?= $destination->title; ?></p>
                                    <p class="m-0 fs-5 fw-light text-secondary"><?= ucwords(strtolower(strtr($destination->city, ['KOTA' => '', 'KABUPATEN ' => '']))); ?>, <?= ucwords(strtolower(province($destination->region_code))); ?></p>
                                </div>
                                
                                <div class="col-5 fs-6 text-end">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="m-0 text-secondary">    
                                                <?php if(strlen(rating($destination->id)) < 4) : ?>
                                                <svg class="pb-1 mr-0 text-warning" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg> 
                                                <?php endif; ?>
                                                <?= rating($destination->id); ?>
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <p class="m-0 text-secondary"><?= sold($destination->id); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="height: 2px;" class="bg-primary">
                            <div class="row">
                                <div class="col-12 text-justified">
                                    <p class="m-0">
                                        <?= $destination->description; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item bg-white">
                                            <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Timeline
                                            </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <p class="m-0 fw-bold fs-5">Ulasan</p>
                                </div>
                                <div class="col-12 my-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="m-0 fs-6 fw-bold"><?= $review->user; ?></p>
                                            <p class="m-0 fs-6"><?= $review->feedback; ?></p>
                                            <svg class="pb-1 mr-0 text-warning" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg> 
                                            <p class="m-0 fs-6"><?= date('d M Y', strtotime($review->inserted_at)); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php if($total_review < 1) : ?>
                                <div class="col-12">
                                    <p class="m-0 fs-6">Tidak ada ulasan</p>
                                </div>
                                <?php else : ?>
                                <div class="col-12 text-center">
                                    <a href="#">Lihat semua ulasan (<?= $total_review; ?>)</a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="form-group row">
              <div class="col-12">
                  <label for="">Jumlah Turis</label>
                  <select name="" id="" class="form-select">
                      <?php for($i=$destination->min_tourist; $i <= $destination->max_tourist; $i++) : ?>
                      <option value="<?= $i; ?>"><?= $i; ?></option>
                      <?php endfor; ?>
                  </select>
              </div>
          </div>
          <div class="form-group row mt-2">
              <div class="col-12">
                  <label for="">Tanggal</label>
                  <input type="text" class="bg-white" id="datepicker" autocomplete="off" onkeypress="return false" onkeydown="return false" maxlength="0" readonly>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="return window.location.href = 'http://localhost/wamanra/transaction/checkout'" class="btn btn-primary" style="width: 100%;">Checkout</button>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('partials/_footer'); ?>