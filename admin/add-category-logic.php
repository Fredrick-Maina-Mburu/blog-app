<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
  $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
  $description = filter_var($_POST['description'], FILTER_SANITIZE_SPECIAL_CHARS);

  if (!$title) {
    $_SESSION['add-category'] = "Enter title !";
  } elseif (!$description) {
    $_SESSION['add-category'] = "Enter description !";
  }

  // redirect to add category page with form data if there was an error in submitting data
  if (isset($_SESSION['add-category'])) {
    $_SESSION['add-category-data'] = $_POST;
    header('location: ' . ROOT_URL . 'admin/add-category.php');
    die();
  } else {
    // add data into database
    $query = "INSERT INTO categories (title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($connection, $query);
    if (mysqli_errno($connection)) {
      $_SESSION['add-category'] = "couldn't add category";
      header('location: ' . ROOT_URL . 'admin/add-category.php');
      die();
    } else {
      $_SESSION['add-category-success'] = "$title category added successfully";
      header('location: ' . ROOT_URL . 'admin/manage-categories.php');
      die();
    }
  }
}