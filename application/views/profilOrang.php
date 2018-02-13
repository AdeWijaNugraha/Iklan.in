 <!-- Modal Pesan-->
        <div class="modal fade" id="modalPesan" role="dialog">
            <div class="modal-dialog">

        <!-- Modal content-->
                <div class="modal-content" id="formBody">
                <div class="modal-header" id="formHeader">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" style="color: white;"><span class="glyphicon glyphicon-edit"></span> Edit Profil</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 50px;">
                        <form role="form" method="post" action="<?php echo base_url('index.php/pesan/buatPesan') ?>">
                        <input type="hidden" name="id_member" value="<?php echo $data->id_member ?>">
                        <input type="hidden" name="username" value="<?php echo $data->username ?>">
                            <div class="form-group">
                                <label for="pesan"><span class="glyphicon glyphicon-user"></span> Pesan</label>
                                <input name="pesan" type="text" class="form-control" id="pesan" placeholder="Masukkan Pesan">
                            </div>
                            <button type="submit" class="btn btn-success btn-block" id="formSubmit">Kirim</button>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p></p>
                    </div>
                </div>

            </div>
        </div> 
    <!-- End Modal Edit -->


<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="background-color: white; padding: 10px; border-radius: 10px" >
   
   
          <div class="panel panel-info" >
            <div class="panel-heading" id="formHeader">
              <h2 class="panel-title" style="color: black;"><?php echo $data->nama ?></h2>
            </div>
                <div class=" col-md-9 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                        <tr>
                        <td >Username:</td>
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
                  <a href="<?php echo base_url("index.php/iklan/iklanOrang/$data->username"); ?>" class="btn btn-primary">Lihat Iklan <?php echo $data->username ?></a>
                  <a href="#" class="btn btn-primary" id="kirimPesan" name="kirimPesan">Kirim Pesan ke <?php echo $data->username ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>




<script type="text/javascript">
      $(document).ready(function(){
    $("#kirimPesan").click(function(){
    $("#modalPesan").modal();
        });
    });  
</script>
