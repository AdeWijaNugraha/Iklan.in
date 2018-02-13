 <form role="form" method="post" action="<?php echo base_url('index.php/komentar/editKomentar') ?>">
 <input type="hidden" name="id_komentar" value="<?php echo $data->id_komentar ?>">
 <input type="hidden" name="id_iklan" value="<?php echo $id_iklan?>">
                            <div class="form-group">
                                <label for="komentar"><span class="glyphicon glyphicon-user"></span> Komentar</label>
                                <input name="komentar" type="text" class="form-control" id="komentar" value="<?php echo $data->komentar ?>">
                            </div>
                            <button type="submit" class="btn btn-success btn-block" id="formSubmit">Simpan</button>
                            
                        </form>