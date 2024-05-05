<?php
include 'partials/header.php';

// get back form data if invalid

$title = $_SESSION['add-category-data']['title'] ?? null;
$description = $_SESSION['add-category-data']['description'] ?? null;

unset($_SESSION['add-category-data']);
?>

<section class="formsection">
  <div class="container form_section-container">
    <h2>Add Category</h2>
    <?php if (isset($_SESSION['add-category'])) : ?>
      <div class="alert_message error">
        <p>
          <?= $_SEESION['add-category'];
          unset($_SESSION['add-category'])
          ?>
        </p>
    </div>
    <?php endif ?>
    <form action="<?= ROOT_URL ?>/admin/add-category-logic.php" method="POST">     
      <input type="text" name="title" value="<?= $title ?>" placeholder="Title">
      <textarea rows="4" name="description" value="<?= $description ?>" placeholder="Description"></textarea>
      <button type="submit" name="submit" class="btn">Add Category</button>
    </form>
  </div>
</section>

<!--------------- END OF SECTION ----------------->

<?php
include '../partials/footer.php';
?>