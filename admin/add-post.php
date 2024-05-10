<?php
include 'partials/header.php';

// fetch categories from database\
$query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $query);

$title = $_SESSION['add-post-success']['title'] ?? null;
$body = $_SESSION['add-post-success']['body'] ?? null;

unset($_SESSION['add-post-success']);
?>
<section class="formsection">
  <div class="container form_section-container">
    <h2>Add Post</h2>
    <?php if (isset($_SESSION['add_post'])) : ?>
    <div class="alert_message error">
      <p>
        <?= $_SESSION['add_post'];
        unset($_SESSION['add_post']);
        ?>
      </p>
    </div>
    <?php endif ?>
    <form action="<?= ROOT_URL ?>/admin/add-post-logic.php" enctype="multipart/form-data" method="POST">     
      <input type="text" name="title" value="<?= $title ?>" placeholder="Title">      
      <select name="category" id="">
        <?php while($category = mysqli_fetch_assoc($categories)) : ?>
          <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
        <?php endwhile ?>
      </select>     
      <textarea rows="10" name="body" value="<?= $body ?>" placeholder="Description"></textarea>
      <?php if (isset($_SESSION['user_is_admin'])) : ?>
      <div class="form_control inline">
        <input type="checkbox" name="is_featured" value="1" id="is_featured" checked>
        <label for="is_featured" >Featured</label>
      </div>
      <?php endif ?>
      <div class="form_control">
        <label for="thumbnail">Add Thumbnail</label>
        <input type="file" name="thumbnail" id="thumbnail">
      </div>
      <button type="submit" name="submit" class="btn">Add Category</button>
    </form>
  </div>
</section>

<!--------------- END OF SECTION ----------------->

<?php
include '../partials/footer.php';
?>