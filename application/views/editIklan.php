<form enctype="multipart/form-data" role="form" method="post" action="<?php echo base_url('index.php/iklan/editIklan'); ?>">
    <div class="form-group">
        <label for="judul"><span class="glyphicon glyphicon-pencil"></span> Judul Iklan</label>
        <input type="hidden" name="id_iklan" value="<?php echo $data->id_iklan; ?>">
        <input name="judul_iklan" type="text" class="form-control" id="judul" value="<?php echo $data->judul_iklan ?>">
    </div>
    <div class="form-group">
        <label for="harga"><span class="glyphicon glyphicon-credit-card"></span> Harga Barang</label>
        <input name="harga_iklan" type="number" class="form-control" id="harga" value="<?php echo $data->harga_iklan ?>">
    </div>
    <div class="form-group">
        <label for="kategori"><span class=" glyphicon glyphicon-shopping-cart"></span> Kategori</label>
        <input name="kategori_iklan" type="text" class="form-control" id="kategori" value="<?php echo $data->kategori_iklan ?>">
    </div>
    <div class="form-group">
        <label for="jumlah"><span class=" glyphicon glyphicon-shopping-cart"></span> Jumlah Barang</label>
        <input name="jumlah" type="number" class="form-control" id="jumlah" value="<?php echo $data->jumlah ?>">
    </div>
    <div class="form-group">
        <label for="deskripsi"><span class="glyphicon glyphicon-text-size"></span> Deskripsi</label>
        <textarea name="deskripsi_iklan" type="text" class="form-control" id="deskripsi"><?php echo $data->deskripsi_iklan ?></textarea>
    </div>
    <div class="form-group">
        <label for="gambarIklan"><span class="glyphicon glyphicon-picture" id="unggahGambar"></span> Unggah Gambar</label>
        <input name="gambarIklan" type="file" class="hidden" id="gambarIklan" placeholder="">
    </div>
    <button type="submit" class="btn btn-success btn-block" id="formSubmit">Simpan</button>
    
</form>