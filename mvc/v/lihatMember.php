<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/style.css">
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/jquery/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {
      height: 1000px;
    }
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #A88645;
      height: 100%;
    }
    a{
      color: white;
    }
    h4{
      color: white;
    }
    
    /* Set black background color, white text and some padding */
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);


body {
  background: #f5f5f5;
  color: #000;
  font-weight: 400;
  font-size: 1.3em;
  font-family: 'Lato', Arial, sans-serif;
  margin:0;
  padding:0;
  padding-bottom:0px;
}
.ccheader {
  margin: 0 auto;
  padding: 2em;
  text-align: center;
}

.ccheader h1 {
  margin: 0;
  font-weight: 300;
  font-size: 2.5em;
  line-height: 1.3;
}
.ccheader {
  margin: 0 auto;
  padding: 2em;
  text-align: center;
}

.ccheader h1 {
  margin: 0;
  font-weight: 300;
  font-size: 2.5em;
  line-height: 1.3;
}

/* Form CSS*/
.ccform {
   margin: 0 auto;
    width: 800px;
}
.ccfield-prepend{
  margin-bottom:10px;
  width:100%;
}

.ccform-addon{
  color:#A88645; 
  float:left;
  padding:8px;
  width:8%;
  background:#FFFFFF;
  text-align:center;  
}

.ccformfield {
  color:#000000; 
  background:#FFFFFF;
  border:none;
  padding:8px;
  width:91.9%;
  display:block;
  font-family: 'Lato',Arial,sans-serif;
  font-size:14px;
}

.ccformfield {
  font-family: 'Lato',Arial,sans-serif;
}
.ccbtn{
  display:block;
  border:none;
  background:#A88645;
  color:#FFFFFF;
  padding:12px 25px;
  cursor:pointer;
  text-decoration:none;
  font-weight:bold;
}
.ccbtn:hover{
  background:#d8850e;

}
.credit {
  width: 800px;
  clear:both;
margin:0 auto;
  line-height:25px;
 padding: 25px 50px; 
text-align: center;
}
.credit em{
margin-right:5px;
}
.credit a {
color: #000;
font-weight: bold;
text-decoration: none;
}

  </style>

</head>
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
      <h3 style="text-align: center;">DAFTAR SELURUH MEMBER</h3>
      <a href="<?php echo base_url()."index.php/Dashboard/insert"; ?>" >     
      <button type="button" class="btn btn-primary btn-sm">Insert</button>
      </a>
      <div class="table-responsive">
        <table class="table table-hover table-striped">
          <tr>
            <th>Id Member</th>
            <th>User Member</th>
            <th>Email</th>
            <th>Password</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Foto Member</th>
            <th>Nomor Hp</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          
            <?php foreach($dataMember as $member){ ?>
              <tr><td><?php echo $member->id_member; ?></td>
              <td><?php echo $member->username; ?></td>
              <td><?php echo $member->email; ?></td>
              <td><?php echo $member->password; ?></td>
              <td><?php echo $member->nama; ?></td>
              <td><?php echo $member->tanggal_lahir; ?></td>
              <td><?php echo $member->foto; ?></td>
              <td><?php echo $member->no_hp; ?></td>
              <td><a href="edit/<?php echo $member->username; ?>"><button type="button" class="btn btn-info btn-sm">Edit</button></a></td>
              <td><a href="delete/<?php echo $member->id_member; ?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a></td></tr>
             
             <?php } ?>
        </table>
      </div>
      <hr>
    </div>
  </div>
</div>
</body>
</html>
