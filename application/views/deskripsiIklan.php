<?php if ($data_user->id_member == $id_member) {?>

<div class="container">    
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-primary" style="border-radius: 0px; border: 1px solid #A88645;">
        <div class="panel-heading" style="background-color: #A88645; text-align: center; color: white;"><?php 
        if ($data->jumlah == 0) {
          echo "(Habis) ".$data->judul_iklan;
        } else {
          echo $data->judul_iklan; 
          }?></div>
        <div class="panel-body" ><img src="<?php echo base_url('uploads/'.$data->foto_iklan) ?>" class="img-responsive" style="width:100%; height: 350px; overflow: hidden;" alt="Image"></div>
      </div>
    </div>
    <div class="col-sm-6"> 
      <div class="panel panel-primary" style="border-radius: 0px; border: 1px solid #A88645;">
        <div class="panel-heading" style="background-color: #A88645; text-align: center; color: white;">Keterangan</div>
        <div class="panel-body" style="width:100%; ">
        Nama : <?php echo $data->judul_iklan ?>
        <br>
        Harga : IDR <?php echo number_format($data->harga_iklan,'0',',','.')?>,-
        <br>
        Deskripsi : <?php echo $data->deskripsi_iklan ?>
        <br>
        Jumlah Barang : <?php echo $data->jumlah ?>
        <br>
        <div class="panel-footer"><a href="<?php echo base_url('index.php/iklan/hapusDeskripsi/'.$data->id_iklan);?>"><button type="submit" class="btn btn-success btn-block" id="formSubmit"  >Hapus Deskripsi</button></a></div>
         <div class="panel-footer"><a href="<?php echo base_url('index.php/iklan/hapusGambar/'.$data->id_iklan);?>"><button type="submit" class="btn btn-success btn-block" id="formSubmit">Hapus Gambar</button></a></div>
         <?php if ($status == "login") { ?>
          <div class="panel-footer"><button type="submit" class="btn btn-success btn-block" id="komentar" <?php if ($data->jumlah == 0) {
          echo "class = \"button disabled\" style=\"cursor: not-allowed; opacity: 0.6;\"";
        } ?> >Komentar</button></div>
        <?php } else { ?>
         <div class="panel-footer"><button type="submit" id="komentar" class = "button disabled" style="cursor: not-allowed; opacity: 0.6;">Komentar</button></div>
        <?php } ?> 
      </div>
      </div>
    </div>
  </div>
</div><br>


<div class="container" style="border: 1px solid #000; border-radius: 10px ; background-color: white;">
  <h2>Komentar</h2>
  <br>
  <?php foreach ($data_komentar as $komentar) { ?>
    <div class="media">
    <div class="media-left">
      <img src="<?php echo base_url('fotoProfil/'.$komentar->foto) ?>" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"> <?php echo $komentar->nama ?> <small><i><?php echo $komentar->waktu ?></i></small></h4>
      <p><?php echo $komentar->komentar ?></p>
      <?php if ($komentar->id_member == $id_member) { ?>
        <a href="<?php echo base_url("index.php/komentar/tampilEditKomentar/$data->id_iklan/". $komentar->id_komentar)?>"><button type="submit" class="btn btn-success btn-block" id="edit" style="width: 50px;">Edit</button></a>
        <a href="<?php echo base_url("index.php/komentar/hapusKomentar/$data->id_iklan/". $komentar->id_komentar)?>"><button type="submit" class="btn btn-success btn-block" id="edit" style="width: 50px;">Hapus</button></a>
      <?php } ?>
    </div>
  </div>
  <?php } ?>

<?php } else { ?>
 
<div class="container">    
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-primary" style="border-radius: 0px; border: 1px solid #A88645;">
         <div class="panel-heading" style="background-color: #A88645; text-align: center; color: white;"><?php 
        if ($data->jumlah == 0) {
          echo "(Habis) ".$data->judul_iklan;
        } else {
          echo $data->judul_iklan; 
          }?></div>
        <div class="panel-body" ><img src="<?php echo base_url('uploads/'.$data->foto_iklan) ?>" class="img-responsive" style="width:100%; height: 350px; overflow: hidden;" alt="Image"></div>
        <div class="panel-footer">Penjual : <a href="<?php echo base_url('index.php/user/profilOrang/'.$data_user->username); ?>"><?php echo $data_user->nama ?></a></div>
      </div>
    </div>
    <div class="col-sm-6"> 
      <div class="panel panel-primary" style="border-radius: 0px; border: 1px solid #A88645;">
        <div class="panel-heading" style="background-color: #A88645; text-align: center; color: white;">Keterangan</div>
        <div class="panel-body" style="width:100%; ">
        Nama : <?php echo $data->judul_iklan ?>
        <br>
        Harga : IDR <?php echo number_format($data->harga_iklan,'0',',','.')?>,-
        <br>
        Deskripsi : <?php echo $data->deskripsi_iklan ?>
        <br>
        Jumlah Barang : <?php echo $data->jumlah ?>
        <br>
        </div>
        
        <?php if ($status == "login") { ?>
        <div class="panel-footer"><button type="submit" class="btn btn-success btn-block" id="order" <?php if ($data->jumlah == 0) {
          echo "class = \"button disabled\" style=\"cursor: not-allowed; opacity: 0.6;\"";
        } ?> >Order</button></div>
          <div class="panel-footer"><button type="submit" class="btn btn-success btn-block" id="komentar" <?php if ($data->jumlah == 0) {
          echo "class = \"button disabled\" style=\"cursor: not-allowed; opacity: 0.6;\"";
        } ?> >Komentar</button></div>
        <?php } else { ?>
         <div class="panel-footer"><button type="submit" id="komentar" class = "button disabled" style="cursor: not-allowed; opacity: 0.6;">Komentar</button></div>
        <?php } ?> 
      </div>
      </div>
    </div>
  </div>
</div><br>


<div class="container" style="border: 1px solid #000; border-radius: 10px; background-color: white;">
  <h2>Komentar</h2>
  <br>
  <?php foreach ($data_komentar as $komentar) { ?>
    <div class="media">
    <div class="media-left">
      <img src="<?php echo base_url('fotoProfil/'.$komentar->foto) ?>" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"> <?php echo $komentar->nama ?> <small><i><?php echo $komentar->waktu ?></i></small></h4>
      <p><?php echo $komentar->komentar ?></p>
      <?php if ($komentar->id_member == $id_member) { ?>
        <a href="<?php echo base_url("index.php/komentar/tampilEditKomentar/$data->id_iklan/". $komentar->id_komentar)?>"><button type="submit" class="btn btn-success btn-block" id="edit" style="width: 50px;">Edit</button></a>
        <a href="<?php echo base_url("index.php/komentar/hapusKomentar/$data->id_iklan/". $komentar->id_komentar)?>"><button type="submit" class="btn btn-success btn-block" id="edit" style="width: 50px;">Hapus</button></a>
      <?php } ?>
    </div>
  </div>
  <?php } ?>
  


<?php } ?>

        <!-- Modal Edit-->
        <div class="modal fade" id="modalKomen" role="dialog">
            <div class="modal-dialog">

        <!-- Modal content-->
                <div class="modal-content" id="formBody">
                <div class="modal-header" id="formHeader">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" style="color: white;"><span class="glyphicon glyphicon-edit"></span> Komentar</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 50px;">
                        <form role="form" method="post" action="<?php echo base_url('index.php/komentar/buatKomentar') ?>">
                        <input type="hidden" name="id_member" value="<?php echo $id_member ?>">
                        <input type="hidden" name="id_iklan" value="<?php echo $data->id_iklan ?>">
                            <div class="form-group">
                                <label for="komentar"><span class="glyphicon glyphicon-user"></span> Komentar</label>
                                <input name="komentar" type="text" class="form-control" id="komentar" placeholder="Masukkan Komentar Anda">
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

    <!-- Modal Edit-->
        <div class="modal fade" id="modalOrder" role="dialog">
            <div class="modal-dialog">

        <!-- Modal content-->
                <div class="modal-content" id="formBody">
                <div class="modal-header" id="formHeader">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" style="color: white;"><span class="glyphicon glyphicon-edit"></span> Order</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 50px;">
                        <form role="form" method="post" action="<?php echo base_url('index.php/pesanan/tambahPesanan') ?>">
                        <input type="hidden" name="jumlah" value="<?php echo $data->jumlah ?>">
                        <input type="hidden" name="harga" value="<?php echo $data->harga_iklan ?>">
                        <input type="hidden" name="id_iklan" value="<?php echo $data->id_iklan ?>">
                            <div class="form-group">
                                <label for="kuantitas"><span class="glyphicon glyphicon-user"></span> Jumlah Barang</label>
                                <input name="kuantitas" type="number" class="form-control" id="kuantitas" placeholder="Masukkan Jumlah Barang Anda">
                            </div>
                            
                            <button type="submit" class="btn btn-success btn-block" id="formSubmit">Order</button>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p></p>
                    </div>
                </div>

            </div>
        </div> 
    <!-- End Modal Edit -->

    <script type="text/javascript">

      $(document).ready(function(){
    $("#komentar").click(function(){
    $("#modalKomen").modal();
        });
    });

      $(document).ready(function(){
    $("#order").click(function(){
    $("#modalOrder").modal();
        });
    });
    </script>

