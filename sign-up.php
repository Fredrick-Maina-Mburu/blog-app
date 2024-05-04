<?php
require 'config/constants.php';

  // get back form datif tghere was a registration error
  $firstname =$_SESSION['signup-data']['firstname'] ?? null;
  $lastname =$_SESSION['signup-data']['lastname'] ?? null;
  $username =$_SESSION['signup-data']['username'] ?? null;
  $email =$_SESSION['signup-data']['email'] ?? null;
  $createpassword =$_SESSION['signup-data']['createpassword'] ?? null;
  $confirmpassword =$_SESSION['signup-data']['confirmpassword'] ?? null;

  // delete signup-data session
  unset($_SESSION['signup-data']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP & MYSQL Blog Application with Admin Panel</title>
  <link href="<?= ROOT_URL?>css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> 

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<section class="formsection">
  <div class="container form_section-container">
    <h2>Sign Up</h2>
    <?php if (isset($_SESSION['signup'])) : ?>
    <div class="alert_message error">
      <p>
        <?= $_SESSION['signup'];
        unset($_SESSION['signup']);
        ?>
      </p>
    </div>
    <?php endif ?>
    <form action="<?= ROOT_URL?>signup-logic.php" enctype="multipart/form-data" method="POST">
      <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
      <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
      <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
      <input type="email"name="email" value="<?= $email ?>" placeholder="Email">
      <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Create Password">
      <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password">
      <div class="form_control">
        <label for="avatar"></label>
        <input type="file" name="avatar" id="avatar">
      </div>
      <button type="submit" name="submit" class="btn">Sign Up</button>
      <small>Already have an acoount? <a href="sign-in.php">Sign In</a></small>
    </form>
  </div>
</section>
</body>
</html>