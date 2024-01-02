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
    <li class="nav-item"><a id="desain-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-desain" aria-selected="false" tabindex="-1" class="nav-link" aria-current="page" href="#tab-desain">Desain</a></li>
    <li class="nav-item"><a id="formulasi-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-formulasi" aria-selected="false" tabindex="-1" class="nav-link" href="#tab-formulasi">Formulasi</a></li>
    <li class="nav-item"><a id="kimiabaku-tab" data-bs-toggle="tab" role="tab" aria-controls="tab-kimiabaku" aria-selected="false" tabindex="-1" class="nav-link" href="#tab-kimiabaku">Kimia Baku</a></li>
</ul>

<div class="tab-content mt-3" id="myTabContent">
    <div class="tab-pane fade" id="tab-desain" role="tabpanel" aria-labelledby="desain-tab">
        <div class="row g-4">
            <div class="col-12">
                <div class="card border border-light">
                    <div class="card-body">
                        <h4 class="card-title">Desain</h4>
                        <div class="table-responsive mt-1">
                            <table class="table table-striped table-bordered mt-1 display nowrap table-item-desain" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Segment</th>
                                        <th>Ex Proses</th>
                                        <th>Efektif</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
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
    <div class="tab-pane fade" id="tab-kimiabaku" role="tabpanel" aria-labelledby="kimiabaku-tab">
        <div class="row g-4">
            <div class="col-12">
                <div class="card border border-light">
                    <div class="card-header">
                        <h4 class="card-title">Kimia Baku</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-1">
                            <table class="table cell-border display table-compact table-hover table-striped table-item-kimiabaku" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>NO</th>
                                        <th>ID</th>
                                        <th>KODE</th>
                                        <th>NAMA</th>
                                        <th>DESKRIPSI</th>
                                        <th>TAG PROSES</th>
                                        <th>ALUR STOK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle white-space-nowrap pe-0 ps-4 btn-reveal-trigger">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                    <span class="fas fa-ellipsis-h fs--2"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item" href="#!">View</a>
                                                    <a class="dropdown-item" data-bs-toggle="offcanvas" href="#kimiaOffcanvas" role="button" aria-controls="kimiaOffcanvas">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>VsdG8</td>
                                        <td>CH-01</td>
                                        <td>Air</td>
                                        <td></td>
                                        <td><span class="badge badge-phoenix badge-phoenix-success me-1">DIP</span><span class="badge badge-phoenix badge-phoenix-warning">COAT</span></td>
                                        <td><span class="fas fa-times text-danger"></span></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle white-space-nowrap pe-0 ps-4 btn-reveal-trigger">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                    <span class="fas fa-ellipsis-h fs--2"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item" href="#!">View</a>
                                                    <a class="dropdown-item" data-bs-toggle="offcanvas" href="#kimiaOffcanvas" role="button" aria-controls="kimiaOffcanvas">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>jdfyA</td>
                                        <td>CH-02</td>
                                        <td>Aica Aibon RA 940</td>
                                        <td></td>
                                        <td><span class="badge badge-phoenix badge-phoenix-warning">COAT</span></td>
                                        <td><span class="fas fa-check text-success"></span></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle white-space-nowrap pe-0 ps-4 btn-reveal-trigger">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                    <span class="fas fa-ellipsis-h fs--2"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item" href="#!">View</a>
                                                    <a class="dropdown-item" data-bs-toggle="offcanvas" href="#kimiaOffcanvas" role="button" aria-controls="kimiaOffcanvas">Edit</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" href="#exampleModal">Variasi</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>3</td>
                                        <td>Vs7AG8</td>
                                        <td>CH-03</td>
                                        <td>Acetic Acid</td>
                                        <td>Interior Pakai Mapel Cid</td>
                                        <td><span class="badge badge-phoenix badge-phoenix-success">DIP</span></td>
                                        <td><span class="fas fa-check text-success"></span></td>
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
<!-- Left Offcanvas-->
<div class="offcanvas offcanvas-start" id="kimiaOffcanvas" tabindex="-1" aria-labelledby="kimiaOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 id="kimiaOffcanvasLabel">Kimia Baku Form</h5>
    </div>
    <div class="offcanvas-body">
        <form id="form-kimiabaku" action="">
            <div class="row g-3 flex-row-reverse mb-5">
                <div class="col-auto">
                    <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" id="batal" type="button">Batal</button>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Simpan</button>
                </div>
            </div>
            <div class="form-floating mb-3" hidden>
                <input class="form-control-plaintext outline-none" id="id" name="id" type="text" readonly="" value="<?= random_string('alnum', 6) ?>" />
                <label for="id">ID</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="Kode" name="Kode" type="text" placeholder="Kode" />
                <label for="Kode">Kode</label>
                <div class="invalid-feedback">Please choose a username.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" />
                <label for="Kode">Nama</label>
                <div class="invalid-feedback">Please choose a username.</div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="deskripsi" placeholder="Deskripsi" style="height: 70px"></textarea>
                <label for="deskripsi">Deskripsi</label>
            </div>
            <div class="mb-3">
                <select class="form-select" id="tag_proses" multiple="multiple" size="1" name="tag_proses" required="required">
                    <!-- <option value="">TAG PROSES</option>
                    <option>DIP</option>
                    <option>COAT</option>
                    <option>CF</option>
                    <option>SPRAY</option> -->
                </select>
                <div class="invalid-feedback">Please select one or multiple</div>
            </div>
            <div class="form-check form-switch float-end mb-3">
                <input class="form-check-input" id="alur_stok" type="checkbox" />
                <label class="form-check-label" for="alur_stok">Tampilkan pada alur stok?</label>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Acetic Acid</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="fas fa-times fs--1"></span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="d-flex bg-200">
                        <div class="p-2 flex-grow-1 ">
                            <div class="row row-cols-lg-5 g-1 align-items-center">
                                <div class="col-12" hidden>
                                    <div class="form-floating mb-3">
                                        <input class="form-control-plaintext outline-none" id="id" name="id" type="text" readonly="" value="<?= random_string('alnum', 6) ?>" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="sr-only" for="inlineFormInputGroupUsername">Tare</label>
                                    <div class="input-group">
                                        <input class="form-control" type="number" placeholder="Tare" onchange="setTwoNumberDecimal" min="0" max="10" step="0.25" />
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="sr-only" for="inlineFormInputGroupUsername">Netto</label>
                                    <div class="input-group">
                                        <input class="form-control" type="number" placeholder="Netto" onchange="setTwoNumberDecimal" min="0" max="10" step="0.25" />
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="sr-only" for="inlineFormInputGroupUsername">Berat Jenis</label>
                                    <div class="input-group">
                                        <input class="form-control" type="number" placeholder="Berat Jenis" onchange="setTwoNumberDecimal" min="0" max="10" step="0.25" />
                                        <span class="input-group-text">Kg/Lit</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="sr-only" for="inlineFormInputName">Edate</label>
                                    <input class="form-control datetimepicker" id="datepicker" type="text" placeholder="Edate" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                                </div>
                                <div class="col-12">
                                    <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Pilih Status</option>
                                        <option value="Efektif">Efektif</option>
                                        <option value="Non-Efektif">Non-Efektif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <button class="btn btn-phoenix-warning" type="button">Hapus</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer"><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Kembali</button></div>
        </div>
    </div>
</div>
<!-- Pills content -->
<?= $this->endSection(); ?>