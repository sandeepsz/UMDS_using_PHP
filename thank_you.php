<?php 
include('config/constants.php');

if(!isset($_SESSION['user_name'])){
  header('location:donation-login.php;');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UMDS Login</title>

  <!-- csss link -->
  <link rel="stylesheet" href="styles/donation-login.css">
</head>
<body>
  <div class="container">
     <div class="content">
      <h1>Thank You!! <span class="user_acc"><?php  echo $_SESSION ['user_name'] ; ?></span></h1>
      <p>for being such a supportive human being.</p>
      <a href="donation-list.php" class="btn">My Donation List</a>
      <a href="donation-logout.php " class="btn">logout</a>
     </div>

  </div>
</body>
</html>