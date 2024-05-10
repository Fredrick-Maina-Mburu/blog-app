<?php
include 'partials/header.php';

// fetch featured post from database
$featured_query = "SELECT * FROM posts WHERE is_featured = 1 ";
$featured_result = mysqli_query($connection, $featured_query);
$featured = mysqli_fetch_array($featured_result);

// fetch 9 posts from table

$query = "SELECT * FROM posts WHERE NOT is_featured = 1 ORDER BY date_time DESC LIMIT 9";
$posts = mysqli_query($connection, $query);
?>

<!-- show featured posts if there are any -->
<?php if(mysqli_num_rows($featured_result) == 1) : ?>
  <section class="featured">
    <div class="container featured_container">
      <div class="post_thumbnail">
        <img src="./images/<?= $featured['thumbnail'] ?>">
      </div>
      <div class="post_info">
      <?php
      // getting category title using category_id from fetured post
        $category_id = $featured['category_id'];
        $category_query = "SELECT title FROM categories where id = $category_id";
        $category_result = mysqli_query($connection, $category_query);
        $category = mysqli_fetch_assoc($category_result);
        ?>
        <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $featured['category_id'] ?>" class="category_button"><?= $category['title'] ?></a>
         <h2 class="post_title"><a href="<?= ROOT_URL ?>post.php?id=<?= $featured['id'] ?>"><?= $featured['title'] ?></a></h2>
         <p class="post_body">
          <?= substr($featured['body'], 0, 300) ?>...
        </p>
         <div class="post_author">
         <?php
          // fetching author using author_id from fetured post
          $author_id = $featured['author_id'];
          $author_query = "SELECT * FROM users where id = $author_id";
          $author_result = mysqli_query($connection, $author_query);
          $author = mysqli_fetch_assoc($author_result);
          ?>
          <div class="post_author-avatar">
            <img src="./images/<?=$author['avatar'] ?>">
          </div>
          <div class="post_author-info">
            <h5>By: <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
            <small>
              <?= date("M d,  Y - H:i", strtotime($featured['date_time'])) ?>
            </small>
          </div>
         </div>
      </div>
    </div>
  </section>
  <?php endif ?>

  <!--=============== END OF FEATURED POST ====================-->

  <section class="posts">
    <div class="container posts_container">
      <?php while($post = mysqli_fetch_assoc($posts)) : ?>
      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/<?=$post['thumbnail'] ?>">
        </div>
        <div class="post_info">
        <?php
          // getting category title using category_id from fetured post
          $category_id = $post['category_id'];
          $category_query = "SELECT title FROM categories where id = $category_id";
          $category_result = mysqli_query($connection, $category_query);
          $category = mysqli_fetch_assoc($category_result);
          ?>
          <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $post['category_id'] ?>" class="category_button"><?=$category['title'] ?></a>
          <h3 class="post_title">
            <a href="post.php">
            <?= substr($post['title'], 0, 45) ?>...
            </a>
          </h3>
          <p class="post_body">
            <?= substr($post['body'], 0, 150) ?>...
          </p>
          <div class="post_author">
          <?php
            // fetching author using author_id from fetured post
            $author_id = $post['author_id'];
            $author_query = "SELECT * FROM users where id = $author_id";
            $author_result = mysqli_query($connection, $author_query);
            $author = mysqli_fetch_assoc($author_result);
            ?>
            <div class="post_author-avatar">
              <img src="./images/<?=$author['avatar'] ?>">
            </div>
            <div class="post_author-info">
              <h5>By: <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
              <small>
                <?= date("M d,  Y - H:i", strtotime($post['date_time'])) ?>
              </small>
            </div>
          </div>
        </div>
      </article>
      <?php endwhile ?>
    </div>
  </section>
  <!--=============== END OF POSTs ====================-->

  <section class="category_buttons">
    <div class="container category_buttons-container">
      <a href="" class="category_button">Category</a>
      <a href="" class="category_button">Wild Life</a>
      <a href="" class="category_button">Art</a>
      <a href="" class="category_button">Science &Technology</a>
      <a href="" class="category_button">Food</a>
      <a href="" class="category_button">Music</a>
    </div>
  </section>
  <!--=============== END OF CATEGORY BUTTONS ====================-->

  <?php
  include 'partials/footer.php';
  ?>