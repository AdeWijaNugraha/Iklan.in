<body>
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <h4>Dashboard</h4>
        <ul class="nav nav-pills nav-stacked">
          <li style="background-color: #8a6d3b;""><a href="">Login</a></li>
          <li ><a href="http://localhost/Iklan.in/index.php/Admin/RegAdmin">Register</a></li>
        </ul><br>
      </div>

      <div class="col-sm-10">
      <hr>
              <header class="ccheader">
                  <h1 style="color: black">LOGIN MEMBER</h1> 
              </header>
              <div class="wrapper">
                  <form method="post" class="ccform" action="<?php echo base_url('index.php/ADMIN/login/'); ?>">
                  <div class="ccfield-prepend">
                      <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
                      <input class="ccformfield" name="username" type="text" placeholder="Username" required>
                  </div>
                  <div class="ccfield-prepend">
                      <span class="ccform-addon"><i class="fa fa-key fa-2x"></i></span>
                      <input class="ccformfield" name="password" type="text" placeholder="Password" required>
                  </div>
                  <div class="ccfield-prepend">
                      <input class="ccbtn" name="submit" type="submit" value="Login" id="formSubmit">
                  </div>
                  </form>
              </div>
      <hr>
    </div>
  </div>
</div>
</body>
</html>
