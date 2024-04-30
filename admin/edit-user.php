<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsice multipage blog website</title>
  <link href="./style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> 

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

  <nav>
    <div class="container nav_container">
      <a href="index.html" class="nav_logo">FRED</a>
      <ul class="nav_items">
        <li><a href="blog.html">Blog</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <!-- <li><a href="sign-in.html">Sign in</a></li> -->
        <li class="nav_profile">
            <div class="avatar">
              <img src="./images/avatar1.jpg">
            </div>
            <ul>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="logout.html">Log out</a></li>
            </ul>
        </li>        
      </ul>
        <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
  </nav>

  <!--=============== END OF NAV ====================-->

<section class="formsection">
  <div class="container form_section-container">
    <h2>Edit User</h2>
    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="First Name">
      <input type="text" placeholder="Last Name">
      <select name="" id="">
        <option value="0">Author</option>
        <option value="1">Admin</option>
      </select>
      <button type="submit" class="btn">Update User</button>
    </form>
  </div>
</section>

<!--------------- END OF SECTION ----------------->

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
</body>
</html>