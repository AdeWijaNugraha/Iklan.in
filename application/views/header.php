<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/style.css">
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/jquery/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/jquery.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="brand">Iklan.In</div>
    <div class="address-bar">Fakultas Ilmu Komputer | Universitas Brawijaya | Malang</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if ($status == "login") {?>
                        <li><a href="<?php echo base_url('index.php/iklan/terbaru'); ?>">HOME</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('index.php/home'); ?>">HOME</a></li>
                    <?php } ?>
                    <li class="dropdown" id="navDrop">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="about.html" id="navMenu">Category <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="dropMenu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('index.php/iklan/kategori/otomotif'); ?>">Otomotif</a></li>
                            <li role="presentation" class="divider" id="batas"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('index.php/iklan/kategori/fashion'); ?>">Fashion</a></li>
                            <li role="presentation" class="divider" id="batas"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('index.php/iklan/kategori/elektronik'); ?>">Elektronik</a></li>
                            <li role="presentation" class="divider" id="batas"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('index.php/iklan/kategori/perabotan'); ?>">Perabotan</a></li>
                            <li role="presentation" class="divider" id="batas"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('index.php/iklan/kategori/mainan'); ?>">Mainan</a></li>
                        </ul>
                    </li>
                    <?php if ($status == "login") {?>
                        <li><a href="<?php echo base_url("index.php/user/profil") ?>" id="masuk"> <?php echo $nama ?></a></li>
                        <li class="dropdown" id="navDrop">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="about.html" id="navMenu" style="color: grey">Notification<span class="badge" > <?php $jumlah = $notifPesan+$notifKomentar; echo $jumlah; ?></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="dropMenu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('index.php/pesan/tampilPesan'); ?>">Anda Mendapat <?php echo $notifPesan ?> Pesan Baru</a></li>
                            <li role="presentation" class="divider" id="batas"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('index.php/komentar/tampilKomentar'); ?>">Anda Mendapat <?php echo $notifKomentar ?> Komentar Baru</a></li>
                        </ul>
                    </li>
                    <?php } else { ?>
                        <li><a href="#" id="masuk">Login</a></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- search -->
    <form class="form-wrapper" action="<?php echo base_url('index.php/iklan/cari'); ?>">
        <input type="text" id="search" placeholder="Search for..." required autocomplete="off" name="cari" style="padding-left: 10px">
        <input type="submit" value="go" id="submit" style="margin-top: 8px; ">
    </form>

    <!-- Modal Login-->
    <div class="modal fade" id="modalLogin" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" id="formBody">
                <div class="modal-header" id="formHeader">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" style="color: white;"><span class="glyphicon glyphicon-log-in"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:20px 50px;">
                    <form role="form" method="post" action="<?php echo base_url('index.php/user/login/'); ?>">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input name="usrname" type="text" class="form-control" id="usrname" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-close"></span> Password</label>
                            <input name="psw" type="password" class="form-control" id="psw" placeholder="Enter password" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" id="formSubmit">Login</button>

                    </form>
                </div>
                <div class="modal-footer">
                    <p>Belum punya akun ? <a href="#" id="signuplink" data-dismiss="modal">Sign Up</a></p>
                </div>
            </div>

        </div>
    </div> 

    <!-- Modal Register-->
    <div class="modal fade" id="modalSignup" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" id="formBody">
                <div class="modal-header" id="formHeader">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" style="color: white;"><span class="glyphicon glyphicon-user"></span> Register</h4>
                </div>
                <div class="modal-body" style="padding:20px 30px;">
                    <form role="form" method="post" action="<?php echo base_url('index.php/user/register/'); ?>">
                        <div class="form-group">
                            <label for="name"><span class="glyphicon glyphicon-user"></span> Nama Lengkap</label>
                            <input name="nama" type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input name="username" type="text" class="form-control" id="username" placeholder="Masukkan Username" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-close"></span> Password</label>
                            <input name="pass" type="password" class="form-control" id="psw" placeholder="Masukkan Password" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" id="formSubmit" style="margin-bottom: 25px">Register</button>
                    </form>
                </div>
            </div>

        </div>
    </div> 

    <script>
        $(document).ready(function () {
            $("#masuk").click(function () {
                $("#modalLogin").modal();
            });
        });
        $(document).ready(function () {
            $("#signuplink").click(function () {
                $("#modalSignup").modal();
            });
        });

    </script>