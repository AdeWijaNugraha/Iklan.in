        <!-- Modal Edit-->
        <div class="modal fade" id="modalEdit" role="dialog">
            <div class="modal-dialog">

        <!-- Modal content-->
                <div class="modal-content" id="formBody">
                <div class="modal-header" id="formHeader">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" style="color: white;"><span class="glyphicon glyphicon-edit"></span> Edit Profil</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 50px;">
                        <form role="form" method="post" action="<?php echo base_url('index.php/user/editProfil') ?>">
                            <div class="form-group">
                                <label for="nama"><span class="glyphicon glyphicon-user"></span> Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama" value="<?php echo $data->nama ?>">
                            </div>
                            <div class="form-group">
                                <label for="tglLahir"><span class="glyphicon glyphicon-calendar"></span> Tanggal Lahir</label>
                                <input name="tglLahir" type="date" class="form-control" id="tglLahir" value="<?php echo $data->tanggal_lahir ?>">
                            </div>
                            <div class="form-group">
                                <label for="noHp"><span class="glyphicon glyphicon-earphone"></span> Nomor HP</label>
                                <input name="noHp" type="text" class="form-control" id="noHp"  value="<?php echo $data->no_hp ?>">
                            </div>
                            <div class="form-group">
                                <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                                <input name="email" type="text" class="form-control" id="email" value="<?php echo $data->email ?>">
                            </div>
                            <div class="form-group">
                                <label for="password"><span class="glyphicon glyphicon-eye-close"></span> Password</label>
                                <input name="pass" type="password" class="form-control" id="password" placeholder="Masukkan Password Baru Anda">
                            </div>
                            <button type="submit" class="btn btn-success btn-block" id="formSubmit">Simpan</button>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p></p>
                    </div>
                </div>

            </div>
        </div> 
    <!-- End Modal Edit -->

    <!-- Modal Buat Iklan -->
            <div class="modal fade" id="modalBuatIklan" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                <div class="modal-header" id="formHeader">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" style="color: white;"><span class="glyphicon glyphicon-plus"></span> Buat Iklan</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 50px;">
                        <form enctype="multipart/form-data" role="form" method="post" action="<?php echo base_url('index.php/iklan/buatIklan'); ?>">
                            <div class="form-group">
                                <label for="judul"><span class="glyphicon glyphicon-pencil"></span> Judul Iklan</label>
                                <input type="hidden" name="id" value="<?php echo $data->id_member; ?>">
                                <input name="judul" type="text" class="form-control" id="judul" placeholder="Masukkan Judul Iklan">
                            </div>
                            <div class="form-group">
                                <label for="harga"><span class="glyphicon glyphicon-credit-card"></span> Harga Barang</label>
                                <input name="harga" type="number" class="form-control" id="harga" placeholder="Masukkan Harga Barang">
                            </div>
                            <div class="form-group">
                                <label for="kategori"><span class=" glyphicon glyphicon-shopping-cart"></span> Kategori</label>
                                <input name="kategori" type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Barang">
                            </div>
                            <div class="form-group">
                                <label for="jumlah"><span class=" glyphicon glyphicon-shopping-cart"></span> Jumlah Barang</label>
                                <input name="jumlah" type="number" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Barang">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi"><span class="glyphicon glyphicon-text-size"></span> Deskripsi</label>
                                <textarea name="deskripsi" type="text" class="form-control" id="deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambarIklan"><span class="glyphicon glyphicon-picture" id="unggahGambar"></span> Unggah Gambar</label>
                                <input name="gambarIklan" type="file" class="hidden" id="gambarIklan" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-success btn-block" id="formSubmit">Simpan</button>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p></p>
                    </div>
                </div>

            </div>
        </div> 
    <!-- End Modal Buat Iklan -->

<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading" id="formHeader">
              <h2 class="panel-title" style="color: grey;"><?php echo $data->nama ?></h2>
            </div>
            <div class="panel-body" id="formBody">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 
                    <img alt="User Pic" src="<?php echo base_url('fotoProfil/'.$data->foto) ?>" class="img-circle img-responsive" id="user-pic">
                    
                    <form action="<?php echo base_url('index.php/user/gantiFoto'); ?>" enctype="multipart/form-data" method='post'>
                        <input id="profile-image-upload" class="hidden" type="file" name="fotoProfil">
                        <button type="submit" class="btn btn-success btn-block" id="formSubmit">Simpan</button>
                    </form>
                    
                </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                        <tr>
                        <td>Username:</td>
                        <td><?php echo $data->username ?></td>
                        </tr>
                        <tr>
                        <td>Email</td>
                        <td><a href="mailto:<?php echo $data->email ?>"><?php echo $data->email ?></a></td>
                        </tr>
                        <tr>
                        <td>Tanggal Lahir</td>
                        <td><?php echo $data->tanggal_lahir ?></td>
                        </tr>
                        <tr>
                        <td>Nomor HP</td>
                        <td><?php echo $data->no_hp ?></td>
                        </tr>                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary" id="buatIklan">Buat Iklan</a>
                  <a href="<?php echo base_url("index.php/iklan/iklanSaya"); ?>" class="btn btn-primary">Lihat Iklan Saya</a>
                  <a href="<?php echo base_url("index.php/pesanan/lihatPesanan"); ?>" class="btn btn-primary">Lihat Pesanan</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer" id="formHeader">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary" href="<?php echo base_url('index.php/pesan/tampilPesan'); ?>"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning" id="edit"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="<?php echo base_url('index.php/user/logout'); ?>" data-original-title="Logout" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger" id="logout"><i class="glyphicon glyphicon-log-out"></i></a>
                        <br>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>




        <script>

    $('#user-pic').on('click', function() {
    $('#profile-image-upload').click();
    });

    $('#unggahGambar').on('click', function() {
    $('#gambarIklan').click();
    });

    $(document).ready(function(){
    $("#login").click(function(){
    $("#modalLogin").modal();
        });
    });

    $(document).ready(function(){
    $("#edit").click(function(){
    $("#modalEdit").modal();
        });
    });

    $(document).ready(function(){
    $("#buatIklan").click(function(){
    $("#modalBuatIklan").modal();
        });
    });


            $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();


});
        </script>
