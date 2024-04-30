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

<section class="dashboard">
  <div class="container dashboard_container">
    <button id="show_sidebar-btn" class="sidebar_toggle">
      <i class="uil uil-angle-right-b"></i>
    </button>
    <button id="hide_sidebar-btn" class="sidebar_toggle">
      <i class="uil uil-angle-left-b"></i>
    </button>
    <aside>
      <ul>
        <li>
          <a href="add-post.html">
            <i class="uil uil-pen"></i>
              <h5>Add Post</h5>
          </a>
        </li>
        <li>
          <a href="dashboard.html">
            <i class="uil uil-postcard"></i>
              <h5>Manage Posts</h5>
          </a>
        </li>
        <li>
          <a href="add-user.html">
            <i class="uil uil-user-plus"></i>
              <h5>Add User</h5>
          </a>
        </li>
        <li>
          <a href="manage-users.html" class="active">
            <i class="uil uil-users-alt"></i>
              <h5>Manage User</h5>
          </a>
        </li>
        <li>
          <a href="add-category.html">
            <i class="uil uil-edit"></i>
              <h5>Add Category</h5>
          </a>
        </li>
        <li>
          <a href="manage-categories.html" >
            <i class="uil uil-list-ul"></i>
              <h5>Manage Categories</h5>
          </a>
        </li>
      </ul>
    </aside>
    <main>
        <h2>Manage Users</h2>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Username</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Admin</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ernrst Achiever</td>
              <td>achiever</td>
              <td><a href="edit-user.html" class="btn sm">Edit</a></td>
              <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
              <td>Yes</td>
            </tr>

            <tr>
              <td>Ernrst Achiever</td>
              <td>achiever</td>
              <td><a href="edit-user.html" class="btn sm">Edit</a></td>
              <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
              <td>Yes</td>
            </tr>

            <tr>
              <td>Jane Doe</td>
              <td>doe</td>
              <td><a href="edit-user.html" class="btn sm">Edit</a></td>
              <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
              <td>Yes</td>
            </tr>
          </tbody>
        </table>
    </main>
  </div>
</section>

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
</html>
