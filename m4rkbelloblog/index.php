<?php

$error="";
include 'server.php';


session_start();

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    // Get the username and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    // Query the database for the user - iyang gisulod 
    $query = "SELECT * FROM useraccount WHERE userEmail='$email' AND upwd='$password'";
    $result = mysqli_query($conn, $query);

    // Check if the user exist
    if (mysqli_num_rows($result) > 0) {
        // Get the user's data
            print'<script>alert("COOKIES CONNECTED!")</script>';
            header('Location:');
       
        // print'<script>window.location.assign("dashboard.php");</script>';
            exit();
        } else {
            // Password is incorrect - kung ang password mali mao ni mo gawas
            $error = 'Invalid email and password!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4rk Bello Blog | Login UI </title>
    <link rel="stylesheet" href="../m4rkbelloblog/style.css">
</head>
<body>
    <body id="#m4rkbelloworld"></body>
    <div class="animated bounceInDown">
      <div class="container">
        <span class="error animated tada" id= "msg"></span>
        <form method="POST" action="index.php" name="form1" class="box" onsubmit="return checkStuff()">
          <h4>Login <span>here</span></h4>
        
          <h5>Sign in to your account.</h5>
          <h5 style="color:red">
          <?php 
          echo "<script>alert('$error');</script>";
          ?>
          </h5>
       
            <input type="text" id="email" name="email" placeholder="Email" required>
            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" id="password" name="password" placeholder="Passsword"  required>
            <label>
              <!-- <input type="checkbox"> -->
              <!-- <span></span> -->
              <!-- <small class="rmb">Remember me</small> -->
            </label>
            
            <a href="#" class="forgetpass">Forget Password?</a>
            
            <input type="submit" class="btn1" id="submit" name="submit">
          </form>
            <a href="#" class="dnthave">Don’t have an account? Sign up</a>
      </div> 
           <div class="footer">
          <span>Secrete Passage Way Concept<i class="fa fa-heart pulse"></i> <a href=""><a href="">By Mark Bello</a></span>
        </div>
    </div>




</body>
</html>

