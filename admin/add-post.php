<?php
include 'partials/header.php';
?>

<section class="formsection">
  <div class="container form_section-container">
    <h2>Add Post</h2>
    <div class="alert_message error">
      <p>This is an error message</p>
    </div>
    <form action="" enctype="multipart/form-data">     
      <input type="text" placeholder="Title">
      <select name="" id="">
        <option value="">Travel</option>
        <option value="">Art</option>
        <option value="">Science & Technology</option>
        <option value="">Wildlife</option>
        <option value=""></option>
        <option value=""></option>
      </select>
      <textarea rows="10" placeholder="Description"></textarea>
      <div class="form_control inline">
        <input type="checkbox" id="is_featured" checked>
        <label for="is_featured" >Featured</label>
      </div>
      <div class="form_control">
        <label for="thumbnail">Add Thumbnail</label>
        <input type="file"id="thumbnail">
      </div>
      <button type="submit" class="btn">Add Category</button>
    </form>
  </div>
</section>

<!--------------- END OF SECTION ----------------->
<?php
include '../partials/footer.php';
?>