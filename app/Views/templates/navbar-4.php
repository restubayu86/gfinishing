<?php $uri = current_url(true); ?>
<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="<?= base_url(); ?>../index.html">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="<?= base_url(); ?>../assets/img/icons/logo.png" alt="G-Finishing" width="27" />
                    <p class="logo-text ms-2 d-none d-sm-block">G-Finishing</p>
                </div>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Beranda</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item" href="<?= base_url(); ?>../index.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                        </a></li>
                    <li><a class="dropdown-item" href="<?= base_url(); ?>../dashboard/project-management.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                        </a></li>
                    <li><a class="dropdown-item" href="<?= base_url(); ?>../dashboard/crm.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                        </a></li>
                    <li><a class="dropdown-item" href="<?= base_url(); ?>../apps/social/feed.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                        </a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link lh-1" href="" role="button">
                    <span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>E-Resep
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-0 me-2 uil-shopping-cart"></span>Order
                </a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li>
                        <a class="dropdown-item <?= ($uri->setSilent()->getSegment(2) == "mto") ? "active" : ""; ?>" href="<?= site_url('order/mto'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-bag"></span>Pembuatan (MTO)</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item <?= ($uri->setSilent()->getSegment(2) == "pemakaian") ? "active" : ""; ?>" href="<?= site_url('order/pemakaian'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="tag"></span>Pemakaian</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-0 me-2 uil-layers"></span>Manajemen Stok
                </a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li>
                        <a class="dropdown-item <?= ($uri->setSilent()->getSegment(2) == "alur") ? "active" : ""; ?>" href="<?= site_url('stok/alur#kimia-baku'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="activity"></span>Alur</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item <?= ($uri->setSilent()->getSegment(2) == "transfer") ? "active" : ""; ?>" href="<?= site_url('stok/transfer#kimia-baku'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shuffle"></span>Transfer</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item <?= ($uri->setSilent()->getSegment(2) == "penyesuaian") ? "active" : ""; ?>" href="<?= site_url('stok/penyesuaian#kimia-baku'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="edit-3"></span>Penyesuaian</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item <?= ($uri->setSilent()->getSegment(2) == "opname") ? "active" : ""; ?>" href="<?= site_url('stok/opname#kimia-baku'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Opname</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item <?= ($uri->setSilent()->getSegment(2) == "stokawal") ? "active" : ""; ?>" href="<?= site_url('stok/stokawal#kimia-baku'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="archive"></span>Stok Awal</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-0 me-2 uil-folder"></span>Master
                </a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li>
                        <a class="dropdown-item <?= ($uri->setSilent()->getSegment(2) == "item") ? "active" : ""; ?>" href="<?= site_url('master/item#desain'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bookmark"></span>Item</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item <?= ($uri->setSilent()->getSegment(2) == "umum") ? "active" : ""; ?>" href="<?= site_url('master/umum#period'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="settings"></span>Umum</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                    <img class="rounded-circle " src="<?= base_url(); ?>../assets/img/team/40x40/57.webp" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                    <div class="card-body p-0">
                        <div class="text-center pt-4 pb-3">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle " src="<?= base_url(); ?>../assets/img/team/72x72/57.webp" alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                        </div>
                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                        <ul class="nav d-flex flex-column mb-2 pb-1">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                        </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                        <ul class="nav d-flex flex-column my-3">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                        </ul>
                        <hr />
                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>