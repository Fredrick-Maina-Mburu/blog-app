<?php
  $category_id = $post['category_id'];
  $category_query = "SELECT title FROM categories where id = $category_id";
  $category_result = mysqli_query($connection, $category_query);
  $category = mysqli_fetch_assoc($category_result);
  ?>

"SELECT id, title, category_id FROM posts WHERE author_id = $current_user_id ORDER BY id DESC"

<?= date("M d,  Y - H:i", strtotime($featured['date_time'])) ?>