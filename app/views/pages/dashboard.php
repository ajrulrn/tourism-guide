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
                                <h3 class="mb-0 fw-bold text-white">Dashboard</h3>
                            </div>
                            <!-- <div>
                                <a href="#" class="btn btn-white">Create New Project</a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                    <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Destinations</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-1">
                                    <i class="bi bi-briefcase fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">18</h1>
                                <p class="mb-0">
                                    <span class="text-dark me-2">2</span>Completed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                    <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Guides</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-1">
                                    <i class="bi bi-list-task fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">132</h1>
                                <p class="mb-0">
                                    <span class="text-dark me-2">28</span>Completed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Tourists</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-1">
                                    <i class="bi bi-people fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">12</h1>
                                <p class="mb-0">
                                    <span class="text-dark me-2">1</span>Completed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card rounded-3">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Transactions</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-1">
                                    <i class="bi bi-bullseye fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">76%</h1>
                                <p class="mb-0">
                                    <span class="text-success me-2">5%</span>Completed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row  -->
            <div class="row mt-6">
                <div class="col-md-6 col-6">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white border-bottom-0 py-4">
                            <h4 class="mb-0">Top Destinations</h4>
                        </div>
                        <!-- table  -->
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                    <th>Destination</th>
                                    <th>Location</th>
                                    <th>Visitor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flexalign-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                        Dropbox Design
                                                        System
                                                    <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">34</td>
                                        <td class="align-middle">
                                            <span class="badge badge-warning">Medium</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            Slack Team UI Design
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">47</td>
                                        <td class="align-middle">
                                            <span class="badge badge-danger">High</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            GitHub Satellite
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">120</td>
                                        <td class="align-middle">
                                            <span class="badge bg-info">Low</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            3D Character Modelling
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">89</td>
                                        <td class="align-middle">
                                            <span class="badge badge-warning">Medium</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            Webapp Design System
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">108</td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Track</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle border-bottom-0">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            Github Event Design
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle border-bottom-0">120</td>
                                        <td class="align-middle border-bottom-0"><span class="badge bg-info">Low</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-6">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white border-bottom-0 py-4">
                            <h4 class="mb-0">Top Guides</h4>
                        </div>
                        <!-- table  -->
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                    <th>Guide</th>
                                    <th>Rating</th>
                                    <th>Visitor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flexalign-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                    <!-- <a href="#" class="text-inherit"> -->
                                                        Dropbox Design
                                                        System
                                                        <!-- <div class="containerdw rating-krajee-fas"> -->

                                                            <label for="input-4" class="control-label">Rate This</label>
                                                            <input id="input-4" name="input-4" class="rating rating-input" data-min="0" data-max="5" data-step="1">
                                                        <!-- </div> -->
                                                    <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">4.3/5 (1452)</td>
                                        <td class="align-middl">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            Slack Team UI Design
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">4.7/5 (1412)</td>
                                        <td class="align-middle">
                                            <span class="badge badge-danger">High</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            GitHub Satellite
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">4.8/5 (941)</td>
                                        <td class="align-middle">
                                            <span class="badge bg-info">Low</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            3D Character Modelling
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">4.6/5 (1123)</td>
                                        <td class="align-middle">
                                            <span class="badge badge-warning">Medium</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            Webapp Design System
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">4.9 (481)</td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Track</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle border-bottom-0">
                                            <div class="d-flex align-items-center">
                                                <div class="lh-1">
                                                    <h5 class="fw-bold mb-1">
                                                        <!-- <a href="#" class="text-inherit"> -->
                                                            Github Event Design
                                                        <!-- </a> -->
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle border-bottom-0">4.9 (213)</td>
                                        <td class="align-middle border-bottom-0">
                                            <span class="badge bg-info">Low</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- row  -->
            <div class="row my-6">
                <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
                    <!-- card  -->
                    <div class="card h-100">
                    <!-- card body  -->
                        <div class="card-body">
                            <div class="d-flex align-items-center
                            justify-content-between">
                            <div>
                                <h4 class="mb-0">Tasks Performance </h4>
                            </div>
                            <!-- dropdown  -->
                            <div class="dropdown dropstart">
                                <a class="text-muted text-primary-hover" href="#"
                                role="button" id="dropdownTask" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownTask">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            </div>
                            <!-- chart  -->
                            <div class="mb-8">
                            <div id="perfomanceChart"></div>
                            </div>
                            <!-- icon with content  -->
                            <div class="d-flex align-items-center justify-content-around">
                            <div class="text-center">
                                <i class="icon-sm text-success"
                                data-feather="check-circle"></i>
                                <h1 class="mt-3 fw-bold mb-1">76%</h1>
                                <p>Completed</p>
                            </div>
                            <div class="text-center">
                                <i class="icon-sm text-warning"
                                data-feather="trending-up"></i>
                                <h1 class="mt-3 fw-bold mb-1">32%</h1>
                                <p>In-Progress</p>
                            </div>
                            <div class="text-center">
                                <i class="icon-sm text-danger"
                                data-feather="trending-down"></i>
                                <h1 class="mt-3 fw-bold mb-1">13%</h1>
                                <p>Behind</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card  -->
                <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                    <div class="card h-100">
                        <!-- card header  -->
                        <div class="card-header bg-white border-bottom-0 py-4">
                            <h4 class="mb-0">Teams </h4>
                        </div>
                        <!-- table  -->
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                            <thead class="table-light">
                                <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Last Activity</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?= base_url(); ?>assets/images/avatar/avatar-2.jpg"
                                        alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="fw-bold mb-1">Anita Parmar</h5>
                                        <p class="mb-0">anita@example.com</p>
                                    </div>
                                    </div>
                                </td>
                                <td class="align-middle">Front End Developer</td>
                                <td class="align-middle">3 May, 2021</td>
                                <td class="align-middle">
                                    <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamOne"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamOne">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                        here</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?= base_url(); ?>assets/images/avatar/avatar-1.jpg"
                                        alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="fw-bold mb-1">Jitu Chauhan</h5>
                                        <p class="mb-0">jituchauhan@example.com</p>
                                    </div>
                                    </div>
                                </td>
                                <td class="align-middle">Project Director </td>
                                <td class="align-middle">Today</td>
                                <td class="align-middle">
                                    <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamTwo"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamTwo">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                        here</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?= base_url(); ?>assets/images/avatar/avatar-3.jpg"
                                        alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="fw-bold mb-1">Sandeep Chauhan</h5>
                                        <p class="mb-0">sandeepchauhan@example.com</p>
                                    </div>
                                    </div>
                                </td>
                                <td class="align-middle">Full- Stack Developer</td>
                                <td class="align-middle">Yesterday</td>
                                <td class="align-middle">
                                    <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamThree"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>

                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamThree">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                        here</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center">

                                    <div>
                                        <img src="<?= base_url(); ?>assets/images/avatar/avatar-4.jpg"
                                        alt="" class="avatar-md avatar rounded-circle">
                                    </div>

                                    <div class="ms-3 lh-1">
                                        <h5 class="fw-bold mb-1">Amanda Darnell</h5>
                                        <p class="mb-0">amandadarnell@example.com</p>
                                    </div>
                                    </div>
                                </td>
                                <td class="align-middle">Digital Marketer</td>
                                <td class="align-middle">3 May, 2021</td>
                                <td class="align-middle">
                                    <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamFour"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>

                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamFour">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                        here</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>

                                <td class="align-middle">
                                    <div class="d-flex align-items-center">

                                    <div>
                                        <img src="<?= base_url(); ?>assets/images/avatar/avatar-5.jpg"
                                        alt="" class="avatar-md avatar rounded-circle">
                                    </div>

                                    <div class="ms-3 lh-1">
                                        <h5 class="fw-bold mb-1">Patricia Murrill</h5>
                                        <p class="mb-0">patriciamurrill@example.com</p>
                                    </div>
                                    </div>
                                </td>
                                <td class="align-middle">Account Manager</td>
                                <td class="align-middle">3 May, 2021</td>
                                <td class="align-middle">
                                    <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamFive"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>

                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamFive">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                        here</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td class="align-middle border-bottom-0">
                                    <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?= base_url(); ?>assets/images/avatar/avatar-6.jpg"
                                        alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="fw-bold mb-1">Darshini Nair</h5>
                                        <p class="mb-0">darshininair@example.com</p>
                                    </div>
                                    </div>
                                </td>
                                <td class="align-middle border-bottom-0">Front End Developer</td>
                                <td class="align-middle border-bottom-0">3 May, 2021</td>
                                <td class="align-middle border-bottom-0">
                                    <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamSix"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>

                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamSix">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                        here</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
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