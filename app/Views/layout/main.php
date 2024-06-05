<?php
$warna1 = "#f78242";
$warna2 = "#33414e";
$warna3 = "#E95793"; //ungu
$warna4 = "#FFFFFF";
$warna5 = "#999999";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Topsis</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="https://i.pinimg.com/564x/54/60/29/546029d3c298f3ccd896b409fc581a19.jpg"
        type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url() ?>public/css/theme-default.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url() ?>public/css/fs.css" />
    <link rel="stylesheet" type="text/css" id="theme"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <style type="text/css">
    .xn-openable ul li {
        left: 25px;
    }

    #nav ul li {
        padding: 1% 3% 1% 3%;
    }

    #nav ul .active {
        padding: 3%;
    }

    #nav ul .active>a {
        background: <?=$warna3 ?>;
        border-radius: 10px;
        color: #FFFFFF;
    }

    #nav ul .active>a .xn-text {
        color: #FFFFFF;
    }

    #nav ul .active>a .fa {
        color: #FFFFFF;
    }

    #nav ul li>a .fa {
        color: #33414e;
        font-size: 18px;
    }
    </style>
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container" style="background: <?= $warna4 ?>">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar" style="background: <?= $warna1 ?>" id="nav">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation" style="background: <?= $warna4 ?>">
                <li class="xn-logox" style="background: <?= $warna4 ?>">
                    <a href="#">
                        <img src="https://i.pinimg.com/564x/54/60/29/546029d3c298f3ccd896b409fc581a19.jpg"
                            alt="Flashsoft Indonesia" width="50px" class="hidden-xs" />
                        &nbsp;&nbsp;<span
                            style="color:<?= $warna3 ?>;display: nonex;font-weight:bold;font-size:18px;">Topsis</span>
                    </a>
                    <a class="x-navigation-control"></a>
                </li>
                <li class="xn-profile" style="background: <?= $warna4 ?>;display:none;">
                    <a href="#" class="profile-mini">
                        <img src="<?= base_url() ?>/adhitama.png" alt="Flashsoft Indonesia" />
                    </a>
                    <div class="profile" style="background: #FFFFFF;display: nonex;">
                        <div class="profile-imagex">
                            <!-- <img src="<?= base_url('public/images/Toko Obat.jpg'); ?>" alt="Flashsoft Indonesia" style="background: white;object-fit: cover;" width="100%" height="300px;" /> -->
                        </div>
                        <div class="profile-data" style="display: none;">
                            <div class="profile-data-name"><?php // isset(session('userData')['nama_pegawai']) ? session('userData')['nama_pegawai'] : session('userData')['username'] 
                                                            ?></div>
                            <div class="profile-data-title"><?php // (session('userData')['level_user']) == 'pimpinan' ? 'Direktur' : 'Admin' 
                                                            ?></div>
                        </div>
                        <div class="profile-controls" style="display: none;">
                            <a href="pages-profile.html" class="profile-control-left"><span
                                    class="fa fa-info"></span></a>
                            <a href="pages-messages.html" class="profile-control-right"><span
                                    class="fa fa-envelope"></span></a>
                        </div>
                    </div>
                </li>
                <!-- <li class="xn-title">Menu</li> -->

                <?php
                if ((session('userData')) != null) {
                    // print_r(session('userData'));
                    // exit;
                    if (session('userData')['level_user'] == 'admin' || session('userData')['level_user'] == 1) {
                ?>

                <li>
                    <a href="<?= base_url() ?>/dashboard"><span class="fa fa-home"></span> <span
                            class="xn-text">Beranda</span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/peminjam"><span class="fa fa-users"></span> <span
                            class="xn-text">Peminjam</span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/kriteria"><span class="fa fa-folder-o"></span> <span
                            class="xn-text">Kriteria</span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/sub-kriteria"><span class="fa fa-folder-open-o"></span> <span
                            class="xn-text">Sub Kriteria</span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/proses"><span class="fa fa-tasks"></span> <span
                            class="xn-text">Proses</span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/hasil"><span class="fa fa-file-text-o"></span> <span
                            class="xn-text">Hasil</span></a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/user"><span class="fa fa-user-circle"></span> <span
                            class="xn-text">User</span></a>
                </li>
                <li>
                    <a href="#" title="Keluar" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"
                            style="color:<?= $warna2 ?>;"></span><span class="xn-text">Logout</span></a>
                </li>


                <?php
                    }
                } else {
                    ?>
                <li>
                    <a href="<?= base_url() ?>/dashboard"><span class="fa fa-home"></span> <span
                            class="xn-text">Beranda</span></a>
                </li>

                <li>
                    <a href="<?= base_url() ?>/about"><span class="fa fa-newspaper-o"></span> <span
                            class="xn-text">About</span></a>
                </li>
                <?php
                }

                ?>

                <!-- <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Keluar</a></li> -->

            </ul>
            <!-- END X-NAVIGATION -->
        </div>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel hidden-xs"
                style="background: <?= $warna3 ?>">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"
                            style="color:<?= $warna2 ?>;"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->

                <!-- POWER OFF -->
                <li class="xn-icon-button pull-right last">
                    <a href="#" title="Keluar" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"
                            style="color:<?= $warna2 ?>;"></span></a>
                </li>
                <!-- END POWER OFF -->

                <!-- LANG BAR -->

                <!-- END LANG BAR -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <!--                 <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Kontrak Kerja</li>
                </ul> -->
            <!-- END BREADCRUMB -->

            <div class="navbar hidden-md hidden-lg" style="display:none;">
                <a href="<?= base_url() ?>/" class="active">
                    <i class="fa fa-home" aria-hidden="true" style="font-size: 20px;"></i>
                    <br>
                    Home
                </a>
                <a href="<?= base_url('do-blok/lokasi-mobile') ?>">
                    <i class="fa fa-bookmark" aria-hidden="true" style="font-size: 20px;"></i>
                    <br>
                    DO
                </a>
                <a href="<?= base_url() ?>/hari-stok/lokasi-mobile">
                    <i class="fa fa-history" aria-hidden="true" style="font-size: 20px;"></i>
                    <br>
                    Stok Gudang
                </a>
                <a href="<?= base_url() ?>/jual-site-plan/lokasi-mobile">
                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 20px;"></i>
                    <br>
                    Penjualan
                </a>
            </div>

            <!-- Konten  -->
            <?= $this->renderSection('content') ?>

        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Ingin <strong>Keluar</strong> ?</div>
                <div class="mb-content">
                    <!--                         <p>Yakin Ingin Keluar ?</p>                     -->
                    <!-- <p>Pilih No . Press Yes to logout current user.</p> -->
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="<?= base_url('/logout') ?>" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->



    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="<?= base_url() ?>public/js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->

    <!-- THIS PAGE PLUGINS -->
    <script type='text/javascript' src='<?= base_url() ?>public/js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript"
        src="<?= base_url() ?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js">
    </script>

    <script type="text/javascript" src="<?= base_url() ?>public/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/plugins/bootstrap/bootstrap-timepicker.min.js">
    </script>

    <script type="text/javascript" src="<?= base_url() ?>public/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <!-- END THIS PAGE PLUGINS -->

    <script type="text/javascript" src="<?= base_url() ?>public/js/plugins/datatables/jquery.dataTables.min.js">
    </script>

    <script type="text/javascript" src="<?= base_url() ?>public/js/actions.js"></script>
    <!-- END THIS PAGE PLUGINS-->


    <!-- START TEMPLATE -->
    <script type="text/javascript" src="<?= base_url() ?>public/js/plugins.js"></script>

    <!-- END TEMPLATE -->

    <script>
    $(function($) {
        let url = window.location.href;
        $('#nav ul li a').each(function() {
            console.log(this.href)
            if (this.href === url) {
                $(this).closest('li').addClass('active');
            }
        });
    });
    </script>

    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->

</body>

</html>