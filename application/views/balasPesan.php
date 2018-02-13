<form role="form" method="post" action="<?php echo base_url('index.php/pesan/balasPesan') ?>">
                        <input type="hidden" name="id_member" value="<?php echo $data->id_member ?>">
                        <input type="hidden" name="username" value="<?php echo $data->username ?>">
                            <div class="form-group">
                                <label for="pesan"><span class="glyphicon glyphicon-user"></span> Pesan</label>
                                <input name="pesan" type="text" class="form-control" id="pesan" placeholder="Masukkan Pesan">
                            </div>
                            <button type="submit" class="btn btn-success btn-block" id="formSubmit">Kirim</button>
                            
                        </form>