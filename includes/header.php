<?php  
require 'config/config.php';

if(isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    $userDetails_query = mysqli_query($con,"SELECT * FROM users WHERE  username ='$userLoggedIn'");
    $user = mysqli_fetch_array($userDetails_query);
}


else{
    header("Location: register.php");
}

?>

<html>
<head>
    <title>Network</title>
    <!-- JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src ="./assets/js/bootstrap.js"></script>
   <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- Font style-->
    <link href="https://fonts.googleapis.com/css?family=Dokdo|Pacifico" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>

<!-- NAV BAR-->
<nav class="navbar navbar-expand-lg main">
  <a class="navbar-logo" href="index.php">Network</a>

  <form class="form-inline mx-auto">
      <input class="form-control searchbar" type="search" placeholder="Search.." aria-label="Search">
      <button class="btn search-btn" type="submit"><i class="fas fa-search"></i></button>
    </form>
 
    <nav class="icons">
    <a class="username" href="">
        <?php echo $user['first_name']?>
    </a>
    <a href="index.php">
    <i class="fas fa-home"></i>
    </a>
    <a href="">
    <i class="fas fa-envelope"></i>
    </a>
    <a href="">
    <i class="fas fa-bell"></i>
    </a>
    <a href="">
    <i class="fas fa-user-friends"></i>
    </a>
    <a href="">
    <i class="fas fa-cogs"></i>
    </a>
    </nav>
</nav>