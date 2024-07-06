<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      margin-top: 50px;
    }
    .alert-success {
      margin-top: 20px;
    }
    img {
      max-width: 100%;
      height: auto;
      padding: 20px;
    }
    @media (max-width: 768px) {
      .container {
        margin-top: 20px;
      }
      .control-group {
        margin-bottom: 15px;
      }
      h1 {
        font-size: 24px;
      }
      h3 {
        font-size: 18px;
      }
      img {
        width: 100%;
        height: auto;
      }
    }
    @media (max-width: 576px) {
      .container {
        margin-top: 10px;
      }
      h1 {
        font-size: 20px;
      }
      h3 {
        font-size: 16px;
      }
      .form-control {
        font-size: 14px;
      }
      button {
        font-size: 14px;
        padding: 10px 20px;
      }
    }
    .img-container {
      text-align: center;
    }
    .img-container img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
<?php $active ='contact';
include 'head.php'; ?>
<?php
if(isset($_POST["send"])){
  $name=$_POST['fullname'];
  $number=$_POST['contactno'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
  $sql= "INSERT INTO contact_query (query_name,query_mail,query_number,query_message,query_status) VALUES('{$name}','{$email}','{$number}','{$message}', 2)";
  $result=mysqli_query($conn,$sql) or die("Query unsuccessful.");
  echo '<div class="alert alert-success alert-dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button>Query Sent, We will contact you shortly.</b></div>';
}?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">
      <h1 class="mt-4 mb-3">Contact</h1>
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" method="post">
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" name="fullname" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="contactno" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" required maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <button type="submit" name="send" class="btn btn-primary">Send Message</button>
          </form>
        </div>
        <div class="col-lg-4 mb-4 img-container">
          <img src="image/pexels-cristian-rojas-8460341.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
