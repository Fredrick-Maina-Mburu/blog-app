<!DOCTYPE php
>
<php
 lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP & MySQL Blog Application with Admin Panel</title>
  <link href="./css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> 

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <nav>
    <div class="container nav_container">
      <a href="index.php
      " class="nav_logo">FRED</a>
      <ul class="nav_items">
        <li><a href="blog.php
        ">Blog</a></li>
        <li><a href="about.php
        ">About</a></li>
        <li><a href="services.php
        ">Services</a></li>
        <li><a href="contact.php
        ">Contact</a></li>
        <!-- <li><a href="sign-in.php
        ">Sign in</a></li> -->
        <li class="nav_profile">
            <div class="avatar">
              <img src="./images/avatar1.jpg">
            </div>
            <ul>
              <li><a href="dashboard.php
              ">Dashboard</a></li>
              <li><a href="logout.php
              ">Log out</a></li>
            </ul>
        </li>        
      </ul>
        <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
  </nav>

  <!--=============== END OF NAV ====================-->
  <section class="featured">
    <div class="container featured_container">
      <div class="post_thumbnail">
        <img src="./images/blog1.jpg">
      </div>
      <div class="post_info">
        <a href="" class="category_button">Wild Life</a>
         <h2 class="post_title"><a href="post.php
         ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus.</a></h2>
         <p class="post_body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, accusantium velit odit mollitia rem totam a! Amet accusantium ab saepe vel? Repudiandae corrupti libero laborum impedit sequi facere eaque? Expedita.</p>
         <div class="post_author">
          <div class="post_author-avatar">
            <img src="./images/avatar2.jpg">
          </div>
          <div class="post_author-info">
            <h5>By: Jane Doe</h5>
            <small>June 10, 2022 - 7:23</small>
          </div>
         </div>
      </div>
    </div>
  </section>

  <!--=============== END OF FEATURED POST ====================-->

  <section class="posts">
    <div class="container posts_container">
      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/blog2.jpg">
        </div>
        <div class="post_info">
          <a href="" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="post.php
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, soluta.</a>
          </h3>
          <p class="post_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab incidunt deleniti, nam sapiente dolor laboriosam corrupti ipsum asperiores dolorem corporis a iure aut nihil.</p>
          <div class="post_author">
            <div class="post_author-avatar">
              <img src="./images/avatar3.jpg">
            </div>
            <div class="post_author-info">
              <h5>By: John Mills</h5>
              <small>June 13, 2022 - 7:45</small>
            </div>
          </div>
        </div>
      </article>

      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/blog3.jpg">
        </div>
        <div class="post_info">
          <a href="" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="post.php
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, soluta.</a>
          </h3>
          <p class="post_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab incidunt deleniti, nam sapiente dolor laboriosam corrupti ipsum asperiores dolorem corporis a iure aut nihil.</p>
          <div class="post_author">
            <div class="post_author-avatar">
              <img src="./images/avatar4.jpg">
            </div>
            <div class="post_author-info">
              <h5>By: John Mills</h5>
              <small>June 13, 2022 - 7:45</small>
            </div>
          </div>
        </div>
      </article>

      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/blog5.jpg">
        </div>
        <div class="post_info">
          <a href="" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="post.php
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, soluta.</a>
          </h3>
          <p class="post_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab incidunt deleniti, nam sapiente dolor laboriosam corrupti ipsum asperiores dolorem corporis a iure aut nihil.</p>
          <div class="post_author">
            <div class="post_author-avatar">
              <img src="./images/avatar5.jpg">
            </div>
            <div class="post_author-info">
              <h5>By: John Mills</h5>
              <small>June 13, 2022 - 7:45</small>
            </div>
          </div>
        </div>
      </article>

      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/blog6.jpg">
        </div>
        <div class="post_info">
          <a href="" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="post.php
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, soluta.</a>
          </h3>
          <p class="post_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab incidunt deleniti, nam sapiente dolor laboriosam corrupti ipsum asperiores dolorem corporis a iure aut nihil.</p>
          <div class="post_author">
            <div class="post_author-avatar">
              <img src="./images/avatar6.jpg">
            </div>
            <div class="post_author-info">
              <h5>By: John Mills</h5>
              <small>June 13, 2022 - 7:45</small>
            </div>
          </div>
        </div>
      </article>

      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/blog7.jpg">
        </div>
        <div class="post_info">
          <a href="" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="post.php
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, soluta.</a>
          </h3>
          <p class="post_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab incidunt deleniti, nam sapiente dolor laboriosam corrupti ipsum asperiores dolorem corporis a iure aut nihil.</p>
          <div class="post_author">
            <div class="post_author-avatar">
              <img src="./images/avatar7.jpg">
            </div>
            <div class="post_author-info">
              <h5>By: John Mills</h5>
              <small>June 13, 2022 - 7:45</small>
            </div>
          </div>
        </div>
      </article>

      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/blog8.jpg">
        </div>
        <div class="post_info">
          <a href="" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="post.php
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, soluta.</a>
          </h3>
          <p class="post_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab incidunt deleniti, nam sapiente dolor laboriosam corrupti ipsum asperiores dolorem corporis a iure aut nihil.</p>
          <div class="post_author">
            <div class="post_author-avatar">
              <img src="./images/avatar8.jpg">
            </div>
            <div class="post_author-info">
              <h5>By: John Mills</h5>
              <small>June 13, 2022 - 7:45</small>
            </div>
          </div>
        </div>
      </article>

      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/blog9.jpg">
        </div>
        <div class="post_info">
          <a href="" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="post.php
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, soluta.</a>
          </h3>
          <p class="post_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab incidunt deleniti, nam sapiente dolor laboriosam corrupti ipsum asperiores dolorem corporis a iure aut nihil.</p>
          <div class="post_author">
            <div class="post_author-avatar">
              <img src="./images/avatar9.jpg">
            </div>
            <div class="post_author-info">
              <h5>By: John Mills</h5>
              <small>June 13, 2022 - 7:45</small>
            </div>
          </div>
        </div>
      </article>

      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/blog10.jpg">
        </div>
        <div class="post_info">
          <a href="" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="post.php
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, soluta.</a>
          </h3>
          <p class="post_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab incidunt deleniti, nam sapiente dolor laboriosam corrupti ipsum asperiores dolorem corporis a iure aut nihil.</p>
          <div class="post_author">
            <div class="post_author-avatar">
              <img src="./images/avatar10.jpg">
            </div>
            <div class="post_author-info">
              <h5>By: John Mills</h5>
              <small>June 13, 2022 - 7:45</small>
            </div>
          </div>
        </div>
      </article>

      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/blog11.jpg">
        </div>
        <div class="post_info">
          <a href="" class="category_button">Wild Life</a>
          <h3 class="post_title">
            <a href="post.php
            ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, soluta.</a>
          </h3>
          <p class="post_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab incidunt deleniti, nam sapiente dolor laboriosam corrupti ipsum asperiores dolorem corporis a iure aut nihil.</p>
          <div class="post_author">
            <div class="post_author-avatar">
              <img src="./images/avatar11.jpg">
            </div>
            <div class="post_author-info">
              <h5>By: John Mills</h5>
              <small>June 13, 2022 - 7:45</small>
            </div>
          </div>
        </div>
      </article>
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

  <footer>
    <div class="footer_socials">
      <a href="https://youtube.com" target="blank"><i class="uil uil-youtube"></i>
      </a>
      <a href="https://facebook.com" target="blank"><i class="uil uil-facebook-f"></i>
      </a>
      <a href="https://instagram.com" target="blank"><i class="uil uil-instagram-alt"></i>
      </a>
      <a href="https://linkedin.com" target="blank"><i class="uil uil-linkedin"></i>
      </a>
      <a href="https://twitter.com" target="blank"><i class="uil uil-twitter"></i>
      </a>
    </div>
    <div class="container footer_container">
      <article>
        <h4>Categories</h4>
        <ul>
          <li><a href=""></a> Art</li>
          <li><a href=""></a>Wild Life</li>
          <li><a href=""></a>Travel</li>
          <li><a href=""></a>Music</li>
          <li><a href=""></a>Science & Technology</li>
          <li><a href=""></a>Food</li>
        </ul>
      </article>

      <article>
        <h4>Support</h4>
        <ul>
          <li><a href=""></a> Online Support</li>
          <li><a href=""></a>Call Numbers</li>
          <li><a href=""></a>Emails</li>
          <li><a href=""></a>Social Support</li>
          <li><a href=""></a>Location</li>
        </ul>
      </article>

      <article>
        <h4>Blogs</h4>
        <ul>
          <li><a href=""></a> Safety</li>
          <li><a href=""></a>Repair</li>
          <li><a href=""></a>Recent</li>
          <li><a href=""></a>Popular</li>
          <li><a href=""></a>Categories</li>
        </ul>
      </article>

      <article>
        <h4>Permalinks</h4>
        <ul>
          <li><a href=""></a>Home</li>
          <li><a href=""></a>Blog</li>
          <li><a href=""></a>About</li>
          <li><a href=""></a>Services</li>
          <li><a href=""></a>Contact</li>
        </ul>
      </article>
    </div>
    <div class="footer_copyright">
      <small>Copyright &copy; FRED blogsite</small>
    </div>
  </footer>

  <script src="./main.js"></script>
</body>
</php
>