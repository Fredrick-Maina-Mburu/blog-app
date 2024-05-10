<?php
require 'config/database.php';

if (isset($_POST['submit'])) {

  $author_id = $_SESSION['user-id'];
  $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
  $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
  $thumbnail = $_FILES['thumbnail'];

    // set is_fetured to 0 if unchecked
    $is_featured = $is_featured == 1 ?: 0;

    // validate form data
    if (!$title) {
      $_SESSION['add_post'] = "Enter post title";
    } elseif(!$category_id) {
      $_SESSION['add_post'] = "Select category";
    } elseif(!$body) {
      $_SESSION['add_post'] = "Enter  a body";
    } elseif(!$thumbnail['name']) {
      $_SESSION['add_post'] = "select a thumbnail for your post";
    } else {
    // work on thumbnail
    // rename image

    $time = time();
    $thumbnail_name = $time . $thumbnail['name'];
    $thumbnail_tmp_name = $thumbnail['tmp_name'];
    $thumbnail_destination_path = "../images/" . $thumbnail_name;

    // // make sure file is an image

    $allowed_files = ['jpeg','jpg','png'];
    $extension = explode('.' ,$thumbnail_name);
    $extension = end($extension);

    if(in_array($extension, $allowed_files)) {
        // make sure file is not too large

        if ($thumbnail['size'] < 2_000_000) {
          // upload thumbnail
          move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
        } else {
          $_SESSION['add_post'] = "file size too big. Should be less than 2mb";
        }
    } else {
      $_SESSION['add_post'] = "file should be in png, jpg or jpeg format";
    }

  // redirect back (with form data) to add post page if there is a problem
  if (isset($_SESSION['add_post'])) {
    $_SESSION['add-post-data'] = $_POST;
    header('location: ' . ROOT_URL . 'admin/add-post.php');
    die();
  } 
    // set is_featured of other posts to 0 if it is set to 1 for this post
    if ($is_featured == 1) {
      $zero_all_is_featured_query = "UPDATE posts SET is_featured=0";
      $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
    }
      // insert post into database

      $query = "INSERT INTO posts (title, body, thumbnail, category_id, author_id, is_featured) VALUES ('$title', '$body', '$thumbnail_name', $category_id, $author_id, $is_featured)";
      $result = mysqli_query($connection, $query);
  
      if (!mysqli_errno($connection)) {
        $_SESSION['add-post-success'] = "post added successfully";
        header('location: ' . ROOT_URL . 'admin/');
        die();
      }
    }
  }

  header('location: ' . ROOT_URL . 'admin/add-post.php');
  die();