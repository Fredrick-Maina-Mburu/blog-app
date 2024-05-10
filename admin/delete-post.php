<?php
require 'config/database.php';

if (isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

  // get post from database to delete thumbnail from images folder
  $query = "SELECT * FROM posts WHERE id=$id";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) == 1) {
    $post = mysqli_fetch_assoc($result);
    $thumbnail = $post['thumbnail'];
    $thumbnail_path = "../images/" . $thumbnail;

    if ($thumbnail_path) {
      unlink($thumbnail_path);

      // proceed to delete the post from database
      $delete_post_query = "DELETE FROM posts WHERE id=$id";
      $delete_post_result = mysqli_query($connection, $delete_post_query);

      if (!mysqli_errno($connection)) {
        $_SESSION['delete-post-success'] = "post deleted successfully";
      }
    }
  }
}
header('location: ' . ROOT_URL . 'admin/');
die();