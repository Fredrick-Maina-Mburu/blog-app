<?php
require 'config/database.php';
?>


<!DOCTYPE php
>
<php
 lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP & MySQL Blog Application with Admin Panel</title>
  <link href="./css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> 

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <nav>
    <div class="container nav_container">
      <a href="index.php
      " class="nav_logo">FRED</a>
      <ul class="nav_items">
        <li><a href="blog.php
        ">Blog</a></li>
        <li><a href="about.php
        ">About</a></li>
        <li><a href="services.php
        ">Services</a></li>
        <li><a href="contact.php
        ">Contact</a></li>
        <!-- <li><a href="sign-in.php
        ">Sign in</a></li> -->
        <li class="nav_profile">
            <div class="avatar">
              <img src="./images/avatar1.jpg">
            </div>
            <ul>
              <li><a href="dashboard.php
              ">Dashboard</a></li>
              <li><a href="logout.php
              ">Log out</a></li>
            </ul>
        </li>        
      </ul>
        <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
  </nav>