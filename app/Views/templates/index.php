<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>G-FINISHING</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?= base_url(); ?>../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?= base_url(); ?>../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="<?= base_url(); ?>../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url(); ?>../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="<?= base_url(); ?>../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="<?= base_url(); ?>../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="<?= base_url(); ?>../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="<?= base_url(); ?>../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="<?= base_url(); ?>../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">

    <link href="<?= base_url(); ?>../vendors/datatable/css/datatables.min.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url(); ?>../vendors/datatable/css/dataTables.bootstrap5.min.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url(); ?>../vendors/datatable/Buttons-2.2.3/css/buttons.bootstrap5.min.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url(); ?>../vendors/choices/choices.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>../vendors/dropzone/min/dropzone.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>../vendors/datatable/Responsive-2.3.0/css/responsive.bootstrap5.min.css" rel="stylesheet"/>
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <script>
        document.documentElement.classList.add('navbar-horizontal');
    </script>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <?php
        echo $this->include('templates/navbar-1');
        echo $this->include('templates/navbar-2');
        echo $this->include('templates/navbar-3');
        echo $this->include('templates/navbar-4');
        echo $this->include('templates/navbar-5');
        echo $this->include('templates/navbar-6');
        echo $this->include('templates/navbar-7');
        echo $this->include('templates/navbar-8');
        ?>
        <script>
            var navbarTopShape = window.config.config.phoenixNavbarTopShape;
            var navbarPosition = window.config.config.phoenixNavbarPosition;
            var body = document.querySelector('body');
            var navbarDefault = document.querySelector('#navbarDefault');
            var navbarTop = document.querySelector('#navbarTop');
            var topNavSlim = document.querySelector('#topNavSlim');
            var navbarTopSlim = document.querySelector('#navbarTopSlim');
            var navbarCombo = document.querySelector('#navbarCombo');
            var navbarComboSlim = document.querySelector('#navbarComboSlim');
            var dualNav = document.querySelector('#dualNav');

            var documentElement = document.documentElement;
            var navbarVertical = document.querySelector('.navbar-vertical');

            if (navbarPosition === 'dual-nav') {
                topNavSlim.remove();
                navbarTop.remove();
                navbarVertical.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarDefault.remove();
                dualNav.removeAttribute('style');
                documentElement.classList.add('dual-nav');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                navbarDefault.remove();
                navbarTop.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                topNavSlim.style.display = 'block';
                navbarVertical.style.display = 'inline-block';
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                navbarVertical.remove();
                navbarTop.remove();
                topNavSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarTopSlim.removeAttribute('style');
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                navbarDefault.remove();
                //- navbarVertical.remove();
                navbarTop.remove();
                topNavSlim.remove();
                navbarCombo.remove();
                navbarTopSlim.remove();
                navbarComboSlim.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                topNavSlim.remove();
                navbarVertical.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarTop.removeAttribute('style');
                documentElement.classList.add('navbar-horizontal');
            } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                topNavSlim.remove();
                navbarTop.remove();
                navbarTopSlim.remove();
                navbarDefault.remove();
                navbarComboSlim.remove();
                navbarCombo.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                documentElement.classList.add('navbar-combo')

            } else {
                topNavSlim.remove();
                navbarTop.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarDefault.removeAttribute('style');
                navbarVertical.removeAttribute('style');
            }

            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.classList.add('navbar-darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.classList.add('navbar-darker');
            }
        </script>
        <div class="content">
            <?= $this->renderSection('content'); ?>
        </div>

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?= $this->include('templates/customizer'); ?>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?= base_url(); ?>../vendors/jquery-3.7.1.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/popper/popper.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/anchorjs/anchor.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/is/is.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/fontawesome/all.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?= base_url(); ?>../vendors/list.js/list.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/feather-icons/feather.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/dayjs/dayjs.min.js"></script>
    <script src="<?= base_url(); ?>../assets/js/phoenix.js"></script>

    <script src="<?= base_url(); ?>../vendors/datatable/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/datatable/js/datatables.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/datatable/Buttons-2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/datatable/Buttons-2.2.3/js/buttons.bootstrap5.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/choices/choices.min.js"></script>
    <script src="<?= base_url(); ?>../assets/js/flatpickr.js"></script>
    <script src="<?= base_url(); ?>../vendors/dropzone/min/dropzone.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/datatable/Responsive-2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>../vendors/datatable/Responsive-2.3.0/js/responsive.bootstrap5.min.js"></script>
    <?php
    helper('html');
    $uri = current_url(true);
    $seg1 = $uri->setSilent()->getSegment(1);
    $seg2 = $uri->setSilent()->getSegment(2);

    switch ($seg1) {
        case 'master':
            switch ($seg2) {
                case 'item':
                    echo script_tag(base_url() . "../../../assets/js/master/item.js");
                    break;
                case 'umum':
                    echo script_tag(base_url() . "../../../assets/js/master/umum.js");
                    break;
            }
            break;

        case 'stok':
            switch ($seg2) {
                case 'alur':
                    echo script_tag(base_url() . "../../../assets/js/stok/alur.js");
                    break;
                case 'transfer':
                    echo script_tag(base_url() . "../../../assets/js/stok/transfer.js");
                    break;
                case 'penyesuaian':
                    echo script_tag(base_url() . "../../../assets/js/stok/penyesuaian.js");
                    break;
                case 'opname':
                    echo script_tag(base_url() . "../../../assets/js/stok/opname.js");
                    break;
                case 'stokawal':
                    echo script_tag(base_url() . "../../../assets/js/stok/stokawal.js");
                    break;
            }
            break;

        default:
            # code...
            break;
    }
    ?>
</body>

</html>