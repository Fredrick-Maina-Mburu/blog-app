<?php
require 'config/database.php';

if (isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

  // fetch user from database
  $query = "SELECT * FROM users WHERE id = $id";
  $result = mysqli_query($connection, $query);
  $user = mysqli_fetch_assoc($result);
  
  // make sure we only got one user
  if (mysqli_num_rows($result) == 1) {
    // var_dump($user);

    $avatar_name = $user['avatar'];
    $avatar_path = '../images/' . $avatar_name;
    // delete image if available
    if ($avatar_path) {
      unlink($avatar_path);
    }

    // For later
    // fetch authors post and thumbnmaails and delete them
    $thumbnail_query = "SELECT thumbnail FROM posts WHERE author_id = $id";
    $thumbnail_result = mysqli_query($connection, $thumbnail_query);

    if (mysqli_num_rows($thumbnail_result) > 0) {
      while ($thumbnail = mysqli_fetch_assoc($thumbnail_result)) {
        $thumbnail_path = "../images/" . $thumbnail['thumbnail'];
        // delete thumbnail form images folder if exists
        if ($thumbnail_path){
          unlink($thumbnail_path);
        }
      }
    } 

    // delete user from database
    $delete_user_query = "DELETE FROM users WHERE id = $id";
    $delete_user_results = mysqli_query($connection, $delete_user_query);

    if (mysqli_errno(($connection))) {
      $_SESSION['delete-user'] = "couldn't delete user {$user['firstname']} {$user['lastname']}";
    } else {
      $_SESSION['delete-user-success'] = "deleted user {$user['firstname']} {$user['lastname']}";
    }
  }
}
header('location: ' . ROOT_URL . 'admin/manage-users.php');
die();