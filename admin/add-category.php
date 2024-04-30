<?php
include 'partials/header.php';
?>

<section class="formsection">
  <div class="container form_section-container">
    <h2>Add Category</h2>
    <div class="alert_message error">
      <p>This is an error message</p>
    </div>
    <form action="" enctype="multipart/form-data">     
      <input type="text" placeholder="Title">
      <textarea rows="4" placeholder="Description"></textarea>
      <button type="submit" class="btn">Add Category</button>
    </form>
  </div>
</section>

<!--------------- END OF SECTION ----------------->
<?php
include '../partials/footer.php';
?>