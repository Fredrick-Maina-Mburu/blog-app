<?php
include 'partials/header.php';

// fetch all posts from table

$query = "SELECT * FROM posts ORDER BY date_time DESC";
$posts = mysqli_query($connection, $query);
?>
 
  <section class="search_bar">
    <form class="container search_bar-container" action="<?= ROOT_URL ?>search.php" method="GET">
      <div>
        <i class="uil uil-search"></i>
        <input type="search" name="search" placeholder="search">
        <button type="submit" name="submit" class="btn">Go</button>
      </div>
      
    </form>
  </section>
  <!--=============== END OF NAV ====================-->

  <section class="posts <?= $featured ? '' : 'section__extra-margin' ?>">
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
            <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>">
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
      <?php
        $all_categories_query = "SELECT * FROM categories";
        $all_categories_result = mysqli_query($connection, $all_categories_query);
        ?>
        <?php while($category = mysqli_fetch_assoc($all_categories_result)) : ?>
          <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category['id'] ?>" class="category_button"><?= $category['title'] ?></a>
        <?php endwhile ?>
    </div>
  </section>
  <!--=============== END OF CATEGORY BUTTONS ====================-->

<?php
include 'partials/footer.php';
?>