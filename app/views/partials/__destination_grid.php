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