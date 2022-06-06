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
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 fw-bold text-primary">Destinasi Populer</h3>
                            </div>
                            <!-- <div>
                                <a href="<?= base_url('admin/destination/create'); ?>" class="btn btn-white">Create New Destination</a>
                            </div> -->
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
              <?php foreach($destinations as $destination) : ?>
              <div class="col-6 mb-3">
                  <a href="<?= base_url('destination/detail/').$destination->id; ?>" class="text-decoration-none text-primary">
                      <div class="card">
                          <div class="card-header p-0">
                              <img src="<?= base_url('assets/images/destinations/').$destination->image; ?>" alt="" class="img-fluid card-img-top">
                          </div>
                          <div class="card-body">
                              <div class="row d-flex align-items-center">
                                  <div class="col-12">
                                      <p class="m-0 fs-4 fw-bold"><?= $destination->title; ?></p>
                                      <p class="m-0 fs-5 fw-light text-secondary"><?= ucwords(strtolower(strtr($destination->city, ['KOTA' => '', 'KAB. ' => '']))); ?></p>
                                  </div>
                                  <div class="col-12 fs-6">
                                      <p class="m-0 text-secondary">
                                        <?php if(strlen(rating($destination->id)) < 4) : ?>
                                        <svg class="pb-1 mr-0 text-warning" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg> 
                                        <?php endif; ?>
                                        <?= rating($destination->id); ?> | <?= sold($destination->id); ?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/_footer'); ?>