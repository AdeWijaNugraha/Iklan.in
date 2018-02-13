
</html>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <br>
      <center>
      <img src="<?php echo base_url('assets') ?>/img/wong/foto.jpg" class="img-circle" width="120" height="120">
      </center>
      <h4>Dashboard</h4>
      <ul class="nav nav-pills nav-stacked">
        <li style="background-color: #8a6d3b;"><a href="lihatMember">Lihat member</a></li>
        <li><a href="lihatIklan">Lihat Iklan</a></li>
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

    <div class="col-sm-10">
       <h3 style="text-align: center;">UPDATE MEMBER</h3>
  
            <form method="post" action="<?php echo base_url()."index.php/Dashboard/doedit"; ?>">
                <table>
                <input type="hidden" name="username" value="<?php echo $username; ?>">
                  <tr>
                    <td>Password</td>
                    <td><input type="text" name="psw" value="<?php echo $password ?>"></td>
                  </tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="text" name="ttl" value="<?php echo $tanggal_lahir ?>"></td>
                  </tr>
                  <tr>
                    <td>Foto Member</td>
                    <td><input type="text" name="foto" value="<?php echo $foto ?>"></td>
                  </tr>
                  <tr>
                    <td>Nomor Hp</td>
                    <td><input type="number" name="noHp" value="<?php echo $no_hp ?>"></td>
                  </tr>
                  <tr>
                    <td>
                    <input type="submit" name="btnSubmit" value="Update">
                    </td>
                  </tr>
                </table>
            </form>
    </div>
  </div>
</div>
</body>
</html>
