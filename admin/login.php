<html>

<head>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body background="admin_image\login.png">


  <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
    }
    .login-card {
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      max-width: 400px;
      width: 100%;
    }
    .login-card .card-header {
      background-image: url('admin_image/glossy1.jpg');
      background-size: cover;
      background-position: center;
      border-radius: 15px 15px 0 0;
      padding: 20px;
      text-align: center;
      color: #ffffff;
    }
    .login-card .form-group {
      margin-bottom: 20px;
    }
    .login-card .form-control {
      border-radius: 25px;
      padding: 15px;
    }
    .login-card .btn {
      border-radius: 25px;
      padding: 10px 20px;
      width: 100%;
      background-color: #ff867c;
      color: #ffffff;
      font-weight: bold;
      border: none;
    }
    .login-card .btn:hover {
      background-color: #ff6b6b;
    }
    .login-card .font-italic {
      font-weight: bold;
      color: #333333;
    }
    .login-card .text-center {
      text-align: center;
    }
  </style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="login-card">
  <div class="card-header">
    <h3>Login</h3>
  </div>
  <div class="card-body">
    <div class="form-group">
      <label class="font-italic">Username<span style="color:red">*</span></label>
      <input type="text" name="username" placeholder="Enter your username" class="form-control" required>
    </div>
    <div class="form-group">
      <label class="font-italic">Password<span style="color:red">*</span></label>
      <input type="password" name="password" placeholder="Enter your Password" class="form-control" required>
    </div>
    <div class="text-center">
      <button type="submit" name="login" class="btn">LOGIN <i class="fa-solid fa-laptop-medical"></i></button>
    </div>
  </div>
</div>
<br>
  <?php
    include 'conn.php';

  if(isset($_POST["login"])){

    $username=mysqli_real_escape_string($conn,$_POST["username"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);

    $sql="SELECT * from admin_info where admin_username='$username' and admin_password='$password'";
    $result=mysqli_query($conn,$sql) or die("query failed.");

    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result)){
        session_start();
         $_SESSION['loggedin'] = true;
        $_SESSION["username"]=$username;
        header("Location: dashboard.php");
      }
    }
    else {
      echo '<div class="alert alert-danger" style="font-weight:bold"> Username and Password are not matched!</div>';
    }

  }
   ?>
 </form>
</body>
</html>
