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

<section class="formsection">
  <div class="container form_section-container">
    <h2>Sign Up</h2>
    <div class="alert_message error">
      <p>This is an error message</p>
    </div>
    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="First Name">
      <input type="text" placeholder="Last Name">
      <input type="text" placeholder="Username">
      <input type="email" placeholder="Email">
      <input type="password" placeholder="Create Password">
      <input type="password" placeholder="Confirm Password">
      <div class="form_control">
        <label for="avatar"></label>
        <input type="file" id="avatar">
      </div>
      <button type="submit" class="btn">Sign Up</button>
      <small>Already have an acoount? <a href="sign-in.html">Sign In</a></small>
    </form>
  </div>
</section>
</body>
</html>