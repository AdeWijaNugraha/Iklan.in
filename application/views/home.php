<!-- container -->
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url('assets'); ?>/img/callousel/1.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url('assets'); ?>/img/callousel/2.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url('assets'); ?>/img/callousel/4.jpeg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Iklan.In</h1>
                    <hr class="tagline-divider">
                    <h2> <small>By <strong>KELOMPOK 7</strong></small></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Categories</h2>
                    <hr>
                    <hr class="visible-xs">
                    <div class="row">
                            <div class="row">
                                <div class="col-sm-4 col-lg-4 col-md-4">
                                    <div class="thumbnail" style="padding-top: 20px;">
                                        <a href="<?php echo base_url('index.php/iklan/kategori/elektronik'); ?>"><img src="<?php echo base_url('assets'); ?>/img/gadget.jpeg" alt="image"></a>
                                            <div class="caption">
                                                <h4 class="pull-right">IDR <?php echo number_format($hargaElektronik->harga_iklan,'0',',','.')?>,-</h4>
                                                <h4><a href="<?php echo base_url('index.php/iklan/kategori/elektronik'); ?>" >Elektronik</a></h4>
                                                <p>Dapatkan Elektronik yang anda inginkan disini.
                                                </p>
                                            </div>
                                            <div class="ratings" style="margin-left: 10px; margin-right: 10px; ">
                                                <p class="pull-right"><?php echo $jumlahElektronik?> iklan</p>
                                                <p>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </p>
                                            </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-lg-4 col-md-4">
                                    <div class="thumbnail" style="padding-top: 20px;">
                                        <a href="<?php echo base_url('index.php/iklan/kategori/otomotif'); ?>"><img src="<?php echo base_url('assets'); ?>/img/motor.jpeg" alt="image"></a>
                                        <div class="caption">
                                            <h4 class="pull-right">IDR <?php echo number_format($hargaOtomotif->harga_iklan,'0',',','.')?>,-</h4>
                                            <h4><a href="<?php echo base_url('index.php/iklan/kategori/otomotif'); ?>">Otomotif</a>
                                            </h4>
                                            <p>Dapatkan Otomotif yang anda inginkan disini.</p>
                                        </div>
                                        <div class="ratings" style="margin-left: 10px; margin-right: 10px; ">
                                            <p class="pull-right"><?php echo $jumlahOtomotif?> iklan</p>
                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-lg-4 col-md-4">
                                    <div class="thumbnail" style="padding-top: 20px;">
                                        <a href="<?php echo base_url('index.php/iklan/kategori/fashion'); ?>"><img src="<?php echo base_url('assets'); ?>/img/fashion.jpg" alt="image"></a>
                                        <div class="caption">
                                            <h4 class="pull-right">IDR <?php echo number_format($hargaFashion->harga_iklan,'0',',','.')?>,-</h4>
                                            <h4><a href="<?php echo base_url('index.php/iklan/kategori/fashion'); ?>">Fashion</a>
                                            </h4>
                                            <p>Dapatkan Fashion yang anda inginkan disini.</p>
                                        </div>
                                        <div class="ratings" style="margin-left: 10px; margin-right: 10px; ">
                                            <p class="pull-right"><?php echo $jumlahFashion?> iklan</p>
                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <div class="thumbnail" style="padding-top: 20px;">
                                        <a href="<?php echo base_url('index.php/iklan/kategori/mainan'); ?>"><img src="<?php echo base_url('assets'); ?>/img/dolls.jpeg" alt="image"></a>
                                        <div class="caption">
                                            <h4 class="pull-right">IDR <?php echo number_format($hargaMainan->harga_iklan,'0',',','.')?>,-</h4>
                                            <h4><a href="<?php echo base_url('index.php/iklan/kategori/mainan'); ?>">Mainan</a>
                                            </h4>
                                            <p>Dapatkan Mainan yang anda inginkan disini.</p>
                                        </div>
                                        <div class="ratings" style="margin-left: 10px; margin-right: 10px; ">
                                            <p class="pull-right"><?php echo $jumlahMainan?> iklan</p>
                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <div class="thumbnail" style="padding-top: 20px;">
                                        <a href="<?php echo base_url('index.php/iklan/kategori/perabotan'); ?>"><img src="<?php echo base_url('assets'); ?>/img/chair.jpeg" alt="image"></a>
                                        <div class="caption">
                                            <h4 class="pull-right">IDR <?php echo number_format($hargaPerabotan->harga_iklan,'0',',','.')?>,-</h4>
                                            <h4><a href="<?php echo base_url('index.php/iklan/kategori/perabotan'); ?>">Perabotan</a>
                                            </h4>
                                            <p>Dapatkan Perabotan yang anda inginkan disini.</p>
                                        </div>
                                        <div class="ratings" style="margin-left: 10px; margin-right: 10px; ">
                                            <p class="pull-right"><?php echo $jumlahPerabotan?> iklan</p>
                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>   