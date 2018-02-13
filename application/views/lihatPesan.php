<!-- Modal Pesan-->
        <div class="modal fade" id="modalPesan" role="dialog">
            <div class="modal-dialog">

        <!-- Modal content-->
                <div class="modal-content" id="formBody">
                <div class="modal-header" id="formHeader">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" style="color: white;"><span class="glyphicon glyphicon-edit"></span> Kirim Pesan</h4>
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

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Daftar Pesan</div>


  <!-- Table -->
  <table class="table">
          <th>Tanggal</th>
          <th>Pengirim</th>
          <th>Pesan</th>
          <th></th>
          <?php foreach ($data as $data): ?>  
          <tr>
            <td><?php echo $data->tanggal ?> </td>
            <td><?php echo $data->nama ?> </td>
            <td><?php echo $data->pesan ?> </td>
            <td><a href="<?php echo base_url("index.php/pesan/tampilBalasPesan/$data->username") ?>"><button type="submit" class="btn btn-success btn-block" >Balas</button></a></td>
          </tr>
          <?php endforeach ?>
  </table>
</div>


<script type="text/javascript">
      $(document).ready(function(){
    $("#kirimPesan").click(function(){
    $("#modalPesan").modal();
        });
    });  
</script>