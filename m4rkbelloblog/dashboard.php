<?php
$error="";
include_once 'server.php';






// Check if the variable $name is not set
// if (!isset($_POST['email']){
//   session_start();
//     echo "The variable name is not set.";
// } else {

// }

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Admin Dashboard" content="Web Page">
    <meta name="author" content="Mark Bello @ 2023">
    <meta name="generator" content="Hugo 0.108.0">
    <title>DASHBOARD · Welcome!</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars-offcanvas/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbars-offcanvas.css" rel="stylesheet">
    <link href="bootstrap-5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/navbars-offcanvas.css" rel="stylesheet">
</head>
<body>

<main>
<nav class="navbar navbar-dark bg-dark" aria-label="Dark offcanvas navbar">
<div class="container-fluid">


  <form class="d-flex mt-3" role="search" method="POST">
    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="searchbtn btn-outline-success" type="submit" name="submit">Search</button>
  </form>



<a class="navbar-brand" href="#">MY PORTFOLIO</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">

    <div class="offcanvas-header">
      
      <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">
        <center>
  
        </center>

      </h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
    <center>
  <img class="logo mb-1 rounded-circle" src="images/mello2.png" alt="mello2" width="200px" height="200px">
</center>
      <ul class="navbar-nav justify-content-end flex-grow-5 pe-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <hr class="dropdown-divider">
        <li class="nav-item">
          <a class="nav-link" href="upload.php">Upload</a>
        </li>
        <hr class="dropdown-divider">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Blog</a>
        </li>
        <hr class="dropdown-divider">
        <li class="nav-item">
          <a class="nav-link" href="adduser.php">Add Account</a>
        </li>
        <hr class="dropdown-divider">
        <li class="nav-item">
          <a class="nav-link" href="#">Notification</a>
        </li>
        <hr class="dropdown-divider">
        <li class="nav-item">
          <a class="nav-link" href="#">Upload</a>
        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Account</a></li>
            <hr class="dropdown-divider">
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap.bundle.min.js"></script>
</main>

<hr>


<hr>






  </body>
</html>
