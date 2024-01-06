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
                            <table class="table cell-border display table-compact table-hover table-striped table-desain" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>NO</th>
                                        <th>ID</th>
                                        <th>KODE</th>
                                        <th>DESAIN</th>
                                        <th>VERSI</th>
                                        <th>KATEGORI</th>
                                        <th>SEGMEN</th>
                                        <th>STATUS</th>
                                        <th>EDATE</th>
                                        <th>DESKRIPSI</th>
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
                        <div class="table-responsive mt-1">
                            <table class="table cell-border display table-compact table-hover table-striped table-item-formulasi" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>NO</th>
                                        <th>ID</th>
                                        <th>KODE</th>
                                        <th>GRUP</th>
                                        <th>VERSI</th>
                                        <th>KATEGORI</th>
                                        <th>SEGMEN</th>
                                        <th>STATUS</th>
                                        <th>EDATE</th>
                                        <th>DESKRIPSI</th>
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
                                                    <a class="dropdown-item" data-bs-toggle="offcanvas" href="#formulasiOffcanvas" role="button" aria-controls="formulasiOffcanvas">Edit</a>
                                                    <a class="dropdown-item" data-bs-toggle="offcanvas" href="#resepOffcanvas" role="button" aria-controls="resepOffcanvas">Resep</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>VsdG8</td>
                                        <td class="fw-bolder">PKKD.1/PMHC</td>
                                        <td>PKKD</td>
                                        <td>1</td>
                                        <td><span class="badge badge-phoenix badge-phoenix-warning">COAT</span></td>
                                        <td>INT</td>
                                        <td><span class="badge badge-phoenix badge-phoenix-success me-1">E</span></td>
                                        <td>27/11/23</td>
                                        <td></td>
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
                                                    <a class="dropdown-item" data-bs-toggle="offcanvas" href="#formulasiOffcanvas" role="button" aria-controls="formulasiOffcanvas">Edit</a>
                                                    <a class="dropdown-item" data-bs-toggle="offcanvas" href="#resepOffcanvas" role="button" aria-controls="resepOffcanvas">Resep</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>VsdG8</td>
                                        <td class="fw-bolder">PKKD.2/B5410</td>
                                        <td>PKKD</td>
                                        <td>2</td>
                                        <td><span class="badge badge-phoenix badge-phoenix-warning">COAT</span></td>
                                        <td>INT</td>
                                        <td><span class="badge badge-phoenix badge-phoenix-success me-1">E</span></td>
                                        <td>27/11/23</td>
                                        <td></td>
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
                                                    <a class="dropdown-item" data-bs-toggle="offcanvas" href="#formulasiOffcanvas" role="button" aria-controls="formulasiOffcanvas">Edit</a>
                                                    <a class="dropdown-item" data-bs-toggle="offcanvas" href="#resepOffcanvas" role="button" aria-controls="resepOffcanvas">Resep</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>3</td>
                                        <td>VsdG8</td>
                                        <td class="fw-bolder">SG8%.2/RG8</td>
                                        <td>SG8%</td>
                                        <td>2</td>
                                        <td><span class="badge badge-phoenix badge-phoenix-success">DIP</span></td>
                                        <td>INT</td>
                                        <td><span class="badge badge-phoenix badge-phoenix-success me-1">E</span></td>
                                        <td>27/11/23</td>
                                        <td></td>
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
    <div class="tab-pane fade" id="tab-kimiabaku" role="tabpanel" aria-labelledby="kimiabaku-tab">
        <div class="row g-4">
            <div class="col-12">
                <div class="card border border-light">
                    <div class="card-body">
                        <div class="table-responsive mt-1">
                            <table class="table cell-border display table-compact table-hover table-striped table-item-kimiabaku" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>NO</th>
                                        <th>ID</th>
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
                                                    <a class="dropdown-item" data-bs-toggle="modal" href="#exampleModal">Variasi</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>VsdG8</td>
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
                                                    <a class="dropdown-item" data-bs-toggle="modal" href="#exampleModal">Variasi</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>jdfyA</td>
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
        <form id="form-kimiabaku" autocomplete="off">
            <div class="row g-3 flex-row-reverse mb-5">
                <div class="col-auto">
                    <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" id="discard" type="button">Discard</button>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Save</button>
                </div>
            </div>
            <div class="form-floating mb-3" hidden>
                <input class="form-control-plaintext outline-none" id="id" name="id" type="text" readonly="" value="<?= random_string('alnum', 6) ?>" />
                <label for="id">ID</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" />
                <label for="nama">Nama</label>
                <div class="invalid-tooltip inv-nama"></div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" style="height: 70px"></textarea>
                <label for="deskripsi">Deskripsi</label>
            </div>
            <div class="mb-3">
                <select class="form-select" id="tag_proses" multiple="multiple" size="1" name="tag_proses">
                    <option value="">Tag Proses</option>
                    <option value="DIP">DIP</option>
                    <option value="COAT">COAT</option>
                </select>
                <div class="invalid-feedback inv-tag_proses"></div>
            </div>
            <div class="form-check form-switch float-end mb-3">
                <input class="form-check-input" id="alur_stok" name="alur_stok" type="checkbox" />
                <label class="form-check-label" for="alur_stok">Tampilkan pada alur stok?</label>
            </div>
        </form>
    </div>
</div>
<div class="offcanvas offcanvas-start" id="formulasiOffcanvas" tabindex="-1" aria-labelledby="formulasiOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 id="formulasiOffcanvasLabel">Formulasi Form</h5>
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
            <div class="input-group mb-3">
                <span class="input-group-text" id="kode-awal">PKKD.1/</span>
                <input class="form-control" id="kode" type="text" aria-describedby="kode-awal" placeholder="Kode" />
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="grup" name="grup" type="text" placeholder="Grup" />
                <label for="grup">Grup</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="versi" name="versi" type="number" min="1" max="100" placeholder="Versi" />
                <label for="versi">Versi</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="kategori" name="kategori">
                    <option value="" disabled>Pilih Kategori</option>
                    <option>DIP</option>
                    <option>COAT</option>
                </select>
                <label for="kategori">Kategori</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="segmen" name="segmen">
                    <option value="" disabled>Pilih Segmen</option>
                    <option>INT</option>
                    <option>OTO</option>
                </select>
                <label for="segmen">Segmen</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="status" name="status">
                    <option value="" disabled>Pilih Status</option>
                    <option>Efektif</option>
                    <option>Non-Efektif</option>
                </select>
                <label for="status">Status</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control datetimepicker flatpickr-input" id="datepicker" type="text" placeholder="dd/mm/yyyy" data-options="{&quot;disableMobile&quot;:true,&quot;dateFormat&quot;:&quot;d/m/Y&quot;}" readonly="readonly">
                <label class="form-label" for="datepicker">Edate</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="deskripsi" placeholder="Deskripsi" style="height: 70px"></textarea>
                <label for="deskripsi">Deskripsi</label>
            </div>
            <div class="form-check form-switch float-end mb-3">
                <input class="form-check-input" id="alur_stok" type="checkbox" />
                <label class="form-check-label" for="alur_stok">Tampilkan pada alur stok?</label>
            </div>
        </form>
    </div>
</div>
<div class="offcanvas offcanvas-end" id="resepOffcanvas" tabindex="-1" aria-labelledby="resepOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 id="formulasiOffcanvasLabel">Resep - C/PKKD.2/B5410</h5>
    </div>
    <div class="offcanvas-body">
        <form id="form-resep" action="">
            <div class="d-flex bg-200 mb-3">
                <div class="p-2 flex-grow-1">
                    <div class="row row-cols-lg-2 g-1 align-items-center">
                        <div class="col-12" hidden>
                            <div class="form-floating mb-3">
                                <input class="form-control-plaintext outline-none" id="id" name="id" type="text" readonly="" value="" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="sr-only" for="kimia_id">Single</label>
                            <select class="form-select" id="kimia_id" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Pilih Kimia</option>
                                <option>Air</option>
                                <option>Acetic Acid</option>
                                <option>RA 940</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="sr-only" for="inlineFormInputGroupUsername">Persen</label>
                            <div class="input-group">
                                <input class="form-control" type="number" placeholder="Persen" onchange="setTwoNumberDecimal" min="0" max="10" step="0.25" />
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-phoenix-warning" type="button">Hapus </button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table cell-border display nowrap table-compact table-resep" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Kimia</th>
                            <th>%</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="d-flex justify-content-center">
                                <a role="button" title="Edit"><span class="fa fa-edit me-3"></span></a>
                                <a role="button" title="Remove"><span class="fa fa-trash text-danger"></span></a>
                            </td>
                            <td>Air</td>
                            <td>82,25</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
<div class="offcanvas offcanvas-start" id="desainOffcanvas" tabindex="-1" aria-labelledby="desainOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 id="desainOffcanvasLabel">Formulasi Form</h5>
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
            <div class="input-group mb-3 d-flex">
                <span class="input-group-text flex-fill" id="kode-awal">D/Arco TA.1/</span>
                <select class="form-select flex-fill" id="kategori" name="kategori" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                    <option value="">Pilih Formulasi</option>
                    <option>PKKD.1/PMHC</option>
                    <option>PKKD.2/B5410</option>
                    <option>SG8%.2/RG8</option>
                </select>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="grup" name="grup" type="text" placeholder="Grup" />
                <label for="grup">Desain</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="versi" name="versi" type="number" min="1" max="100" placeholder="Versi" />
                <label for="versi">Versi</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="kategori" name="kategori">
                    <option value="" disabled>Pilih Kategori</option>
                    <option>DIP</option>
                    <option>COAT</option>
                </select>
                <label for="kategori">Kategori</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="segmen" name="segmen">
                    <option value="" disabled>Pilih Segmen</option>
                    <option>INT</option>
                    <option>OTO</option>
                </select>
                <label for="segmen">Segmen</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="status" name="status">
                    <option value="" disabled>Pilih Status</option>
                    <option>Efektif</option>
                    <option>Non-Efektif</option>
                </select>
                <label for="status">Status</label>
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control datetimepicker flatpickr-input" id="datepicker" type="text" placeholder="dd/mm/yyyy" data-options="{&quot;disableMobile&quot;:true,&quot;dateFormat&quot;:&quot;d/m/Y&quot;}" readonly="readonly">
                <label class="form-label" for="datepicker">Edate</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="deskripsi" placeholder="Deskripsi" style="height: 70px"></textarea>
                <label for="deskripsi">Deskripsi</label>
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
                <h5 class="modal-title" id="exampleModalLabel">Variasi - Acetic Acid</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="fas fa-times fs--1"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <form>
                        <div class="d-flex bg-200">
                            <div class="p-2 flex-grow-1">
                                <div class="row row-cols-lg-4 g-1 align-items-center">
                                    <div class="col-12" hidden>
                                        <div class="form-floating mb-3">
                                            <input class="form-control-plaintext outline-none" id="id" name="id" type="text" readonly="" value="<?= random_string('alnum', 6) ?>" />
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
                                <button class="btn btn-phoenix-warning mb-1" type="button">Hapus </button>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table cell-border display nowrap table-compact table-hover table-striped table-variasi-kimia" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>NO</th>
                                <th>ID</th>
                                <th>KODE</th>
                                <th>NETTO</th>
                                <th>B. JENIS</th>
                                <th>EDATE</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-flex justify-content-center">
                                    <a role="button" title="Edit"><span class="fa fa-edit me-2"></span></a>
                                    <a role="button" title="Copy"><span class="fa fa-copy me-2"></span></a>
                                    <a role="button" title="Remove"><span class="fa fa-trash text-danger"></span></a>
                                </td>
                                <td>1</td>
                                <td>VsdG8</td>
                                <td>Acetic Acid/1000</td>
                                <td>1000</td>
                                <td>1.2</td>
                                <td>27/11/23</td>
                                <td><span class="badge badge-phoenix badge-phoenix-success me-1">E</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Kembali</button></div>
        </div>
    </div>
</div>
<!-- Pills content -->
<?= $this->endSection(); ?>