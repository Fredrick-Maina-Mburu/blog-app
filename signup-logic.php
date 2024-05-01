<?php
require 'config/database.php';

// get signup form data if signup button was clicked

if (isset($_POST['submit'])) {
  $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
  $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_SPECIAL_CHARS);
  $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
  $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
  $avatar = $_FILES['avatar'];

  // validate input values

  if (!$firstname) {
    $_SESSION['signup'] = 'Please enter your first name';
  } elseif (!$lastname) {
    $_SESSION['signup'] = 'Please enter your last name';
  } elseif (!$username) {
    $_SESSION['signup'] = 'Please enter your username';
  } elseif (!$email) {
    $_SESSION['signup'] = 'Please enter a valid email';
  } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
    $_SESSION['signup'] = 'Password should be 8+ characters';
  } elseif (!$avatar['name']) {
    $_SESSION['signup'] = 'Please add an avatar';
  } else {
    if ($createpassword !== $confirmpassword) {
      $_SESSION['signup'] = 'passwords do not match';
    } else {
      // hashing password
      $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

      // check if username or email already exists

      $user_check_query = "SELECT * FROM users WHERE $username='username' OR $email='email'";
      $user_check_result = mysqli_query($connection, $user_check_query);
      if (mysqli_num_rows($user_check_result) > 0) {
        $_SESSION['signup'] = 'username or email already exists';
      } else {
        // work on avatar
        // rename avatar

        $time = time(); //mak each avatar name unique using the timestamp
        $avatar_name = $time . $avatar['name'];
        $avatar_tmp_name = $avatar['tmp_name'];
        $avatar_destination_path = 'images/' . $avatar_name;

        // make sure files is an image
        $allowed_files = ['.png','.jpg','jpeg'];
        $extention = explode('.', $avatar_name);
        $extention = end($extention);

        if (in_array($extention, $allowed_files)) {
          // make sure image is not too large 1mb+

          if ($avatar['size'] > 1000000) {
            // upload image
            move_uploaded_file($avatar_tmp_name, $avatar_destination_path);

          } else {
            $_SESSION['signup'] = 'The image should be equal or less than 1mb';
          }
        } else {
          $_SESSION['signup'] = 'The image should be in .jpg , .jpeg or .png format';
        }
      }
    }
  }

  // redirect to signup page if there is any problem
  if ($_SESSION['signup']) {
  // pass form data back to signup page
  header('location: ' . ROOT_URL . 'sign-up.php');
  die();
  } else {
    // insert new users into user table
    $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";

    if (!mysqli_errno($connection)){
      //  redirects to signin page with success message
      $_SESSION['signup_success'] = 'Registration successful. . Pleas log in!';
      header('location: ' . ROOT_URL . 'sign-in.php');
      die();
    }
  }
} else {
  // if button was clicked bounce back to signup page
  header('location: ' . ROOT_URL . 'sign-up.php');
  die();
}