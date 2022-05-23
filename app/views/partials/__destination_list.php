<?php if(isset($destinations)) : ?>
    <?php foreach($destinations as $destination) :?>
    <div class="col-12 mb-1">
        <a href="<?= base_url('destination/view/').$destination->id; ?>">
            <div class="card text-secondary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <p class="m-0 fs-5 fw-bold text-primary"><?= $destination->title; ?></p>
                            <p class="m-0 fs-6"><?= ucwords(strtolower(strtr($destination->city, ['KOTA' => '', 'KAB. ' => '']))); ?>, <?= ucwords(strtolower(province($destination->region_code))); ?></p>
                            <p class="m-0 fs-6">
                                <span class="badge <?= $destination->is_published ? 'bg-light-success text-dark-success' : 'bg-light-warning text-dark-warning' ?>">
                                    <?= $destination->is_published ? 'Dipublish' : 'Tidak Dipublish'; ?>
                                </span>
                            </p>
                            <?php if (!$destination->is_have_timeline) : ?>
                            <p class="m-0 fs-6">
                                <span class="badge bg-light-danger text-dark-danger">Timeline Belum Diatur</span>
                            </p>
                            <?php endif; ?>
                        </div>
                        <div class="col-6 text-end">
                            <p class="m-0 <?= strlen(rating($destination->id)) > 3  ? 'fs-6' : ''; ?>">
                            <?php if(strlen(rating($destination->id)) < 4) : ?>
                            <svg class="pb-1 mr-0 text-warning" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg> 
                            <?php endif; ?>
                            <?= rating($destination->id); ?></p>
                            <p class="m-0 fs-6"><?= sold($destination->id); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; ?>
<?php else : ?>
    <div class="col-12">
        <p class="m-0">Tidak ada destinasi</p>
    </div>
<?php endif; ?>