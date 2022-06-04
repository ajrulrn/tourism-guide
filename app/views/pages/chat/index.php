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
                                <h3 class="mb-0 fw-bold text-primary">Chat</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6 pb-3">
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
                        <?php foreach($chats as $index => $item) : ?>
                        <a href="<?= base_url('chat/detail/'); ?><?= $item->sender_user_id != $this->session->userdata(SESSION_KEY) ? $item->sender_user_id : $item->receiver_user_id; ?>" class="text-decoration-none text-secondary">
                            <div class="row <?= count($chats) > 1 ? (count($chats)-1 != $index ? 'mb-3 border-bottom pb-2' : '') : '';?> d-flex align-items-center">
                                <div class="col-2">
                                    <img src="https://ui-avatars.com/api/?name=<?= $item->sender_user_id != $this->session->userdata(SESSION_KEY) ? urlencode($item->sender) : urlencode($item->receiver); ?>&background=random" alt="" class="img-flui rounded-circle" width="50" height="50">
                                </div>
                                <div class="col-10">
                                    <p class="m-0 fw-bold ps-2"><?= $item->sender_user_id != $this->session->userdata(SESSION_KEY) ? $item->sender : $item->receiver; ?></p>
                                    <p class="m-0 ps-2"><?= $item->sender_user_id == $this->session->userdata(SESSION_KEY) ? 'You: ' : ''; ?><?= $item->message; ?></p>
                                </div>
                            </div>    
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/_footer'); ?>