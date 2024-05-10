<?php
include 'partials/header.php';

// fetch categories
$category_query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $category_query);

if(isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);  
  $query = "SELECT * FROM posts WHERE id =$id ";
  $result = mysqli_query($connection, $query);
  $post = mysqli_fetch_assoc($result);
} else {
  header('location: ' . ROOT_URL . 'admin/index.php');
  die();
}

?>

<section class="formsection">
  <div class="container form_section-container">
    <h2>Edit Post</h2>
    <form action="<?= ROOT_URL ?>admin/edit-post-logic.php" enctype="multipart/form-data" method="POST">
      <input type="hidden" name="id" value="<?= $post['id'] ?>">
      <input type="hidden" name="previous_thumbnail_name" value="<?= $post['thumbnail'] ?>">     
      <input type="text" placeholder="Title" name="title" value="<?= $post['title'] ?>">
      <select name="category" id="">
        <?php while($category = mysqli_fetch_assoc($categories)) : ?>
        <option value="<?= $category['id']?>"><?= $category['title'] ?></option>
        <?php endwhile ?>
      </select>
      <textarea rows="10" name="body" placeholder="Description"><?= $post['body'] ?>"</textarea>
      <div class="form_control inline">
        <input type="checkbox" id="is_featured" name="is_featured" value="1" checked>
        <label for="is_featured" >Featured</label>
      </div>
      <div class="form_control">
        <label for="thumbnail">Change Thumbnail</label>
        <input type="file"id="thumbnail" name="thumbnail">
      </div>
      <button type="submit" name="submit" class="btn">Update Post</button>
    </form>
  </div>
</section>

<!--------------- END OF SECTION ----------------->

<?php
include '../partials/footer.php';
?>