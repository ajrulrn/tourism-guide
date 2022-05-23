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
                <div class="col-12">
                    <div class="card p-3 border">
                        <div class="row mb-3">
                            <div class="col-12 border-bottom pb-2">
                                <a href="<?= base_url('chat'); ?>" class="text-secondary">
                                    <i class="nav-icon icon-xs" data-feather="arrow-left"></i>
                                </a>
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80" alt="" class="img-flui rounded-circle me-2" width="45" height="45">
                                <span class="fs-5">Ajrul Rizqi</span>
                            </div>
                        </div>
                        <div class="chat-body pe-1" style="height:50vh; overflow-y: scroll; overflow-x:hidden">
                        <div class="row mb-2">
                            <div class="offset-2 col-10">
                                <p class="m-0 text-secondary fs-6">
                                    <span class="d-inline-block bg-primary bg-gradient text-white p-2 rounded">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis explicabo sunt dolor, velit odio.
                                    </span>    
                                </p>
                                <p class="m-0 text-secondary text-end" style="font-size: .65rem;">6 Mar</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-10">
                                <p class="m-0 text-secondary fs-6">
                                    <span class="d-inline-block bg-light bg-gradient text-secondary p-2 rounded">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis explicabo sunt dolor, velit odio.
                                    </span>    
                                </p>
                                <p class="m-0 text-secondary text-end" style="font-size: .65rem;">6 Mar</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-10">
                                <p class="m-0 text-secondary fs-6">
                                    <span class="d-inline-block bg-light bg-gradient text-secondary p-2 rounded">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis explicabo sunt dolor, velit odio.
                                    </span>    
                                </p>
                                <p class="m-0 text-secondary text-end" style="font-size: .65rem;">6 Mar</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-10">
                                <p class="m-0 text-secondary fs-6">
                                    <span class="d-inline-block bg-light bg-gradient text-secondary p-2 rounded">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis explicabo sunt dolor, velit odio.
                                    </span>    
                                </p>
                                <p class="m-0 text-secondary text-end" style="font-size: .65rem;">6 Mar</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="offset-2 col-10">
                                <p class="m-0 text-secondary fs-6">
                                    <span class="d-inline-block bg-primary bg-gradient text-white p-2 rounded">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis explicabo sunt dolor, velit odio.
                                    </span>    
                                </p>
                                <p class="m-0 text-secondary text-end" style="font-size: .65rem;">6 Mar</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="offset-2 col-10">
                                <p class="m-0 text-secondary fs-6">
                                    <span class="d-inline-block bg-primary bg-gradient text-white p-2 rounded">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis explicabo sunt dolor, velit odio.
                                    </span>    
                                </p>
                                <p class="m-0 text-secondary text-end" style="font-size: .65rem;">6 Mar</p>
                            </div>
                        </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-10 pe-1">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-2 ps-1">
                            <button class="btn px- btn-primary" style="box-sizing: border-box;">
                                <i class="nav-icon icon-xs" data-feather="send" ></i>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>