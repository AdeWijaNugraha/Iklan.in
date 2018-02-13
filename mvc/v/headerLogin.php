<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/style.css">
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/jquery/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>

        

        
    </head>
    <body>

    
        <nav class="navbar navbar-inverse" id="navBar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#"><img src="<?php echo base_url('assets') ?>/img/logo.png" alt="Logo" width="130" height="50" id="navLogo"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="<?php echo base_url('index.php/kategori/terbaru'); ?>" id="navMenu">HOME</a></li>
                        <li class="dropdown" id="navDrop">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="navMenu">CATEGORY <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="dropMenu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">OTOMOTIF</a></li>
                                <li role="presentation" class="divider" id="batas"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">FASHION</a></li>
                                <li role="presentation" class="divider" id="batas"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ELEKTRONIK</a></li>
                                <li role="presentation" class="divider" id="batas"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PERABOTAN</a></li>
                                <li role="presentation" class="divider" id="batas"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">MAINAN</a></li>
                            </ul>
                        </li>
                        <li><a href="#" id="login"><span class="glyphicon glyphicon-log-in"></span> <?php echo "bxx"//userdata("nama"); ?></a></li>
                        <li ><form><input type="text" name="search" id="search" placeholder="Search.."></form></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="modalLogin" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                    <div class="modal-header" id="formHeader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center"><span class="glyphicon glyphicon-log-in"></span> Login</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 50px;">
                        <form role="form">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                <input name="usrname" type="text" class="form-control" id="usrname" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-close"></span> Password</label>
                                <input name="psw" type="text" class="form-control" id="psw" placeholder="Enter password" required>
                            </div>
                            <a href="#" id="login"><button type="submit" class="btn btn-success btn-block" id="formSubmit">Login</button></a>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p>Belum punya akun ? <a href="#" id="signuplink" data-dismiss="modal">Sign Up</a></p>
                    </div>
                </div>

            </div>
        </div> 

        <!-- Modal -->
        <div class="modal fade" id="modalSignup" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                    <div class="modal-header" id="formHeader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center"><span class="glyphicon glyphicon-user"></span> Register</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 30px;">
                        <form role="form" method="post">
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
                            <a href="<?php echo base_url('index.php/home/login/'.$iklan->iklan_id); ?>" id="login"><button type="submit" class="btn btn-success btn-block" id="formSubmit" style="margin-bottom: 25px">Register</button></a>
                        </form>
                    </div>
                </div>

            </div>
        </div> 

        <script>
            $(document).ready(function () {
                $("#login").click(function () {
                    $("#modalLogin").modal();
                });
            });
            $(document).ready(function () {
                $("#signuplink").click(function () {
                    $("#modalSignup").modal();
                });
            });

        </script>
