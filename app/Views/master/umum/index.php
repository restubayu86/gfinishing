<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-5">
        <li class="breadcrumb-item"><a href="#!">Beranda</a></li>
        <li class="breadcrumb-item active"><?= humanize($uri->getSegment(1), "-"); ?></li>
        <li class="breadcrumb-item active"><?= humanize($uri->getSegment(2), "-"); ?></li>
        <li class="breadcrumb-item active last-breadcumb"></li>
    </ol>
</nav>

<ul class="nav nav-pills">
    <li class="nav-item"><a id="period-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-period" aria-selected="false" tabindex="-1" class="nav-link" aria-current="page" href="#tab-period">Period</a></li>
    <li class="nav-item"><a id="proses-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-proses" aria-selected="false" tabindex="-1" class="nav-link" href="#tab-proses">Proses</a></li>
    <li class="nav-item"><a id="segmentasi-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-segmentasi" aria-selected="false" tabindex="-1" class="nav-link" href="#tab-segmentasi">Segmentasi</a></li>
</ul>

<div class="tab-content mt-3" id="myTabContent">
    <div class="tab-pane fade" id="tab-period" role="tabpanel" aria-labelledby="period-tab">
        <div class="row g-4">
            <div class="col-12">
                <div class="card border border-light">
                    <div class="card-body">
                        <h4 class="card-title">Period</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="tab-proses" role="tabpanel" aria-labelledby="proses-tab">
        <div class="row g-4">
            <div class="col-12">
                <div class="card border border-light">
                    <div class="card-body">
                        <h4 class="card-title">Proses</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="tab-segmentasi" role="tabpanel" aria-labelledby="segmentasi-tab">
        <div class="row g-4">
            <div class="col-12">
                <div class="card border border-light">
                    <div class="card-body">
                        <h4 class="card-title">Segmentasi</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pills content -->
<?= $this->endSection(); ?>