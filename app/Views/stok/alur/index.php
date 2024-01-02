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
    <li class="nav-item"><a id="kimiabaku-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-kimiabaku" aria-selected="false" tabindex="-1" class="nav-link" href="#tab-kimiabaku">Kimia Baku</a></li>
    <li class="nav-item"><a id="formulasi-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-formulasi" aria-selected="false" tabindex="-1" class="nav-link" href="#tab-formulasi">Formulasi</a></li>
</ul>

<div class="tab-content mt-3" id="myTabContent">
    <div class="tab-pane fade" id="tab-kimiabaku" role="tabpanel" aria-labelledby="kimiabaku-tab">
        <div class="row g-4">
            <div class="col-12">
                <div class="card border border-light">
                    <div class="card-body">
                        <h4 class="card-title">Kimia Baku</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="tab-formulasi" role="tabpanel" aria-labelledby="formulasi-tab">
        <div class="row g-4">
            <div class="col-12">
                <div class="card border border-light">
                    <div class="card-body">
                        <h4 class="card-title">Formulasi</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pills content -->
<?= $this->endSection(); ?>