<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      background-color: #2e5668;
      padding: 10px 10px;
      border-radius: 0;
    }
    .navbar-brand {
      font-size: 35px;
      font-weight: bold;
      color: #ffeaac !important;
    }
    .navbar-nav > li > a {
      color: #ffd5d5 !important;
      font-weight: bold;
    }
    .navbar-nav > li > a:hover, .navbar-nav > li > a:focus {
      background-color: #95ccc5 !important;
      border-radius: 5px;
      color: #2e5668 !important;
    }
    .dropdown-menu {
      background-color: #ffd5d5 !important;
      border-radius: 5px;
    }
    .dropdown-menu > li > a {
      color: #2e5668 !important;
    }
    .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
      background-color: #ffeaac !important;
      color: #2e5668 !important;
    }
    .navbar-right {
      float: right !important;
    }
    .dropdown-toggle {
      color: #ffd5d5 !important;
      font-size: 18px;
      font-weight: bold;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" id="qq" href="dashboard.php">Blood Bridge Solutions Admin Panel</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" id="qw" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;
          <?php
          include 'conn.php';
          $username=$_SESSION['username'];
          $sql="select * from admin_info where admin_username='$username'";
          $result=mysqli_query($conn,$sql) or die("query failed.");
          $row=mysqli_fetch_assoc($result);
          echo "Hello " . $row['admin_name'];
          ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="change_password.php">Change Password</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

</body>
</html>
