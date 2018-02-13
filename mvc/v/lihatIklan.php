<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <br>
      <center>
      <img src="<?php echo base_url('assets') ?>/img/wong/foto.jpg" class="img-circle" width="120" height="120">
      </center>
      <h4>Dashboard</h4>
      <ul class="nav nav-pills nav-stacked" >
        <li><a href="lihatMember">Lihat member</a></li>
        <li style="background-color: #8a6d3b;""><a href="lihatIklan">Lihat Iklan</a></li>
        <li><a href="http://localhost/Iklan.in/index.php/Admin/logout">Logout</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
    <div class="col-sm-10" >
       <h3 style="text-align: center;">DAFTAR SELURUH IKLAN</h3>
      <hr>

        
              <ul class="nav nav-tabs ">
                <li class="active"><a data-toggle="tab" href="#delay" style="color:black;">Barang Verifikasi 
                <span class="badge"><?php echo $ambilData[1]->c_verifikasi ?></span> </a></li>
                <li><a data-toggle="tab" href="#verifikasi" style="color:black;">Barang Delay
                <span class="badge"><?php echo $ambilData[0]->c_verifikasi ?></span> </a></li>
                <div class="btn-group nav navbar-nav navbar-right">
                  <button type="button" class="btn btn-primary dropdown-toggle; " data-toggle="dropdown">
                  Urutkan Berdasarkan <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Nama  : A - Z</a></li>
                    <li><a href="#">Nama  : Z - A</a></li>
                    <li><a href="#">Harga : Terendah - Tertinggi</a></li>
                    <li><a href="#">Harga : Tertinggi - Terendah</a></li>
                  </ul>
                </div>
              </ul>
            
              
    
              <br>  
        <div class="tab-content">
          <div id="delay" class="tab-pane fade in active">
                           <div class="col-sm-3" >  
                            <?php foreach ($dataIklan as $barang): ?>
                            <?php if($barang->status_iklan == "Verifikasi"){ ?>
                                          <div class="panel " style="border-radius: 0px; border: 1px solid #A88645;" id="panel"> 
                                            <a href="<?php echo base_url('index.php/barang/satu/'.$barang->id_iklan); ?>">
                                              <div class="panel-heading" style="background-color: #A88645; text-align: center; color: white;" >
                                               <?php echo $barang->judul_iklan; ?>
                                              </div>
                                              <div class="panel-body">
                                                <img src="<?php echo base_url('uploads/'.$barang->foto_iklan) ?>" class="img-responsive" style="width:100%;
                                                 height: 150px;" alt="Image"> 
                                              </div>
                                              <div class="panel-footer" style="color : black">
                                                  Rp. <?php echo $barang->harga_iklan ?>
                                              </div>
                                            </a>
                                          </div> 
                                <?php }?>
                                <?php ?>
                                      <?php endforeach ?>

                            </div>      

                            <div class="col-sm-4">
                            <?php foreach ($dataIklan as $barang): ?>
                            <?php if($barang->status_iklan == "Verifikasi"){ ?>
                                          <div class="panel panel-primary" style="border-radius: 0px; border: 1px solid #A88645;" id="panel"> 

                                            
                                              <div class="panel-heading" style="background-color: #A88645; text-align: center; color: white;" >
                                               Deskripsi Iklan
                                              </div>
                                              <div class="panel-body" style="color : black; width:100%; height: 176px;">

                                                Kategori Iklan : <?php echo $barang->kategori_iklan; ?><br>
                                                Deskripsi Iklan : <?php echo $barang->deskripsi_iklan; ?><br>
                                                Status Iklan : <?php echo $barang->status_iklan; ?>
                                              </div>
                                              <div class="panel-footer" style="color : black; ">
                                                  
                                              <?php
                                              if($barang->status_iklan === "Delay"){ ?>

                                                 <a href="ubah/<?php echo $barang->id_iklan;?>/1" ?>
                                                <?php  echo "<button type=\"button\" class=\"btn btn-success btn-xs\" > Verifikasi </button>"; ?>
                                                </a> 
                                                <?php }else{ ?>
                                                  <a href="ubah/<?php echo $barang->id_iklan; ?>/0" ?>
                                                <?php  echo "<button type=\"button\" class=\"btn btn-warning btn-xs\"> Delay </button>"; ?>
                                                </a> 
                                              <?php  } ?>
                                                  <a href="deleteBarang/<?php echo $barang->id_iklan; ?>">
                                                  <button type="button" class="btn btn-danger btn-xs">Hapus</button>
                                                  </a>
                                              </div>
                                            
                                          </div> 
                            <?php }?>
                            <?php endforeach ?>

                            </div>      

          </div>
          <div id="verifikasi" class="tab-pane fade">
            
                    <div class="col-sm-3" >  
                                      <?php foreach ($dataIklan as $barang): ?>
                                      <?php if($barang->status_iklan === "Delay"){ ?>
                                                    <div class="panel " style="border-radius: 0px; border: 1px solid #A88645;" id="panel"> 
                                                      <a href="<?php echo base_url('index.php/barang/satu/'.$barang->id_iklan); ?>">
                                                        <div class="panel-heading" style="background-color: #A88645; text-align: center; color: white;" >
                                                         <?php echo $barang->judul_iklan; ?>
                                                        </div>
                                                        <div class="panel-body">
                                                          <img src="<?php echo base_url('uploads/'.$barang->foto_iklan) ?>" class="img-responsive" style="width:100%;
                                                           height: 150px;" alt="Image"> 
                                                        </div>
                                                        <div class="panel-footer" style="color : black">
                                                            <?php echo $barang->harga_iklan ?>
                                                        </div>
                                                      </a>
                                                    </div> 
                                          <?php }?>
                                                <?php endforeach ?>

                                      </div>      

                                      <div class="col-sm-4">
                                      <?php foreach ($dataIklan as $barang): ?>
                                      <?php if($barang->status_iklan === "Delay"){ ?>
                                                    <div class="panel panel-primary" style="border-radius: 0px; border: 1px solid #A88645;" id="panel"> 

                                                      
                                                        <div class="panel-heading" style="background-color: #A88645; text-align: center; color: white;" >
                                                         Deskripsi Iklan
                                                        </div>
                                                        <div class="panel-body" style="color : black; width:100%; height: 176px;">

                                                          Kategori Iklan : <?php echo $barang->kategori_iklan; ?><br>
                                                          Deskripsi Iklan : <?php echo $barang->deskripsi_iklan; ?><br>
                                                          Status Iklan : <?php echo $barang->status_iklan; ?>
                                                        </div>
                                                        <div class="panel-footer" style="color : black; ">
                                                            
                                                        <?php
                                                        if($barang->status_iklan === "Delay"){ ?>

                                                           <a href="ubah/<?php echo $barang->id_iklan;?>/1" ?>
                                                          <?php  echo "<button type=\"button\" class=\"btn btn-success btn-xs\" > Verifikasi </button>"; ?>
                                                          </a> 
                                                          <?php }else{ ?>
                                                            <a href="ubah/<?php echo $barang->id_iklan; ?>/0" ?>
                                                          <?php  echo "<button type=\"button\" class=\"btn btn-warning btn-xs\"> Delay </button>"; ?>
                                                          </a> 
                                                        <?php  } ?>
                                                            <a href="deleteBarang/<?php echo $barang->id_iklan; ?>">
                                                            <button type="button" class="btn btn-danger btn-xs">Hapus</button>
                                                            </a>
                                                        </div>
                                                      
                                                    </div> 
                                      <?php }?>
                                      <?php endforeach ?>

                                      </div>      

          </div>
          
        </div>

    
   
            
              

      <hr>
    </div>
  </div>
</div>

</body>
</html>
