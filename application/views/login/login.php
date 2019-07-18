<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
  
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
      <?php 
  if(isset($_GET['pesan']))
  { 
    if($_GET['pesan'] == "salah")
      { 
        echo "<div class='alert alert-danger'>UserName atau Password Salah</div>"; 
      }else if($_GET['pesan'] == "logout")
      { 
         echo "<div class='alert alert-success'>Anda Telah Logout.</div>";
      }else if($_GET['pesan'] == "belumlogin")
      { 
          echo "<div class='alert alert-danger'>Anda Belum Login</div>";
      } else { 
                      echo "<div class='alert alert-danger'>Data Gagal Disimpan.</div>";
                  }
  } 
?>

        <form action="<?php echo base_url() ?>login/proses" method="post">
            <center><h4 class="mt-3">E-Approval Sekertariat Daerah</h4></center>
        
            <center><img src="<?php echo base_url() ?>assets/img/tangerang.png" width="100" height="100"
              alt=""></center>
             <center><h3 class="mb-3">Kabupaten Tangerang</h3></center>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="userName" class="form-control" name="username" placeholder="Username" required="required" autofocus="autofocus">
              <label for="useraName">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
         
          <button type="submit"class="btn btn-info btn-block" >Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
