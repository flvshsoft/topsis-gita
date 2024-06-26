<!DOCTYPE html>
<html lang="en" class="body-full-height">

<head>
    <!-- META SECTION -->
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="<?= base_url() ?>public/images/elgoni.png" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url() ?>public/css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
    <style type="text/css">
    html {
        width: 100%;
        height: 100%;
        display: table;
    }

    body {
        /* background: #eed3a6; */
        background: url("<?= base_url() ?>public/images/bg_login.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        display: table-cell;
    }


    .circle {
        position: absolute;
        border-radius: 50%;
        background: white;
        animation: ripple 15s infinite;
        box-shadow: 0px 0px 1px 0px #508fb9;
    }

    .small {
        width: 200px;
        height: 200px;
        left: -100px;
        top: -100px;
    }

    .medium {
        width: 400px;
        height: 400px;
        left: -200px;
        top: -200px;
    }

    .large {
        width: 600px;
        height: 600px;
        left: -300px;
        top: -300px;
    }

    .xlarge {
        width: 800px;
        height: 800px;
        left: -400px;
        top: -400px;
    }

    .xxlarge {
        width: 1000px;
        height: 1000px;
        left: -500px;
        top: -500px;
    }

    .shade1 {
        opacity: 0.2;
    }

    .shade2 {
        opacity: 0.5;
    }

    .shade3 {
        opacity: 0.7;
    }

    .shade4 {
        opacity: 0.8;
    }

    .shade5 {
        opacity: 0.9;
    }

    @keyframes ripple {
        0% {
            transform: scale(0.8);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(0.8);
        }
    }
    </style>
</head>

<body>
    <div class='ripple-background'>
        <div class='circle xxlarge shade1'></div>
        <div class='circle xlarge shade2'></div>
        <div class='circle large shade3'></div>
        <div class='circle mediun shade4'></div>
        <div class='circle small shade5'></div>
        <div class="login-container" style="background: none;">

            <div class="login-box animated fadeInDown">
                <!-- <div class="login-logo"></div> -->
                <div class="col-md-2">
                    <a href="<?= base_url('/') ?>"><img src="<?= base_url('/public/images/siak.png') ?>" alt="John Doe"
                            width="45px" align="center" /></a>
                </div>
                <h3>
                    Sistem Pendukung Keputusan
                </h3>
                <p>Kelayakan Penerima Pinjaman diBumDes Menggunakan Metode Topsis</p>
                <div class="login-body" style="background: #33414e;">
                    <div class="login-title"><strong>Welcome</strong>, Silahkan login</div>
                    <form action="<?= base_url('/login') ?>" class="form-horizontal" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"
                                        style="background: #29343e;border: 1px solid #5c6873;padding: 0px;">
                                        <i class="glyphicon glyphicon-user" style="top:-2px;"></i>
                                    </span>
                                    <input type="text" class="form-control" name="username" placeholder="Username"
                                        value="<?= old('username') ?>" autofocus="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"
                                        style="background: #29343e;border: 1px solid #5c6873;padding: 0px;">
                                        <i class="glyphicon glyphicon-lock" style="top:-2px;"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Password" />
                                </div>
                            </div>
                        </div>
                        <?php if (session()->getFlashdata('error') !== NULL) : ?>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <?php echo session()->getFlashdata('error'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-md-3 pull-right">
                                <button class="btn btn-info btn-block">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-right" style="color:#000">
                        &copy; 2024 Universitas Riau
                    </div>

                </div>
            </div>
            <!-- <img src="<?= base_url('/images/about.png') ?>" alt="John Doe" width="400px" style="margin-top:10%;margin-left:0%;" /> -->

        </div>
    </div>



</body>

</html>