<div class="container">
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Hasil Pencarian</h2>
        <hr>
        <hr class="visible-xs">
        <div class="row">
          <div class="row">
            <?php foreach ($data as $barang): ?>
              <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail" style="padding-top: 20px;">
                    <div class="panel-body"><img src="<?php echo base_url('uploads/'.$barang->foto_iklan) ?>" class="img-responsive" style="width:100%; height: 250px;" alt="Image"></div>
                  <div class="caption">
                      <h4 class="pull-right">IDR <?php echo number_format($barang->harga_iklan,'0',',','.')  ?>,-</h4>
                      <h4><a href="<?php echo base_url('index.php/iklan/deskripsiIklan/'.$barang->id_iklan); ?>" ><?php echo $barang->judul_iklan; ?></a></h4>
                      <p><?php echo substr($barang->deskripsi_iklan,0,25); ?>... <a href="<?php echo base_url('index.php/iklan/deskripsiIklan/'.$barang->id_iklan); ?>" style="font-size: 13px">click detail</a></p>
                  </div>
                  <div class="ratings" style="margin-left: 10px; margin-right: 10px; ">
                    <p class="pull-right" style="font-size: 14px">Tersedia: <?php echo $barang->jumlah ?> barang</p>
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
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
