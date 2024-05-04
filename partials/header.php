<?php
require 'config/database.php';

// fetch current user from database

if (isset($_SESSION['user-id'])) {
  $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
  $query = "SELECT avatar FROM users WHERE id = '$id'";
  $result = mysqli_query($connection, $query);
  $avatar = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP & MYSQL Blog Application with Admin Panel</title>
  <link href="<?= ROOT_URL ?>css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> 

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <nav>
    <div class="container nav_container">
      <a href="<?= ROOT_URL ?>" class="nav_logo">FRED</a>
      <ul class="nav_items">
        <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
        <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
        <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
        <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
        <?php if(isset($_SESSION['user-id'])) : ?>
        <li class="nav_profile">
            <div class="avatar">
              <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>">
            </div>
            <ul>
              <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
              <li><a href="<?= ROOT_URL ?>logout.php">Log out</a></li>
            </ul>
        </li> 
        <?php else : ?>
        <li><a href="<?= ROOT_URL ?>sign-in.php">Sign in</a></li>
        <?php endif ?>       
      </ul>
        <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
  </nav>

  <!--=============== END OF NAV ====================-->