<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SRMS</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" href="https://imgs.search.brave.com/mxUi3SedBJ0ulvsEYukW8BaIAOaY4OEie0gWUqtlIP8/rs:fit:711:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5V/Vy1JRWRhSmJHcU4z/Mm5GVlYxU0p3SGFF/OCZwaWQ9QXBp">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <div class="main">
      <div class="container a-container" id="a-container">
      
        <form class="form" id="a-form" method="POST" action="gateway.php">
          <h2 class="form_title title">Create Account</h2>
          <?php include 'respond.php'; ?>
          <span class="form__span"></span>
          <input type="text" class="form__input" name="name" id="name" placeholder="Full Name *" required="required" autocomplete="off" title="Insert Your Full Name Here">

					<input type="text" class="form__input" name="email" id="email" placeholder="Email Address *" required="required" autocomplete="off" title="Insert Your Email Address Here">

					<input type="password" class="form__input" name="password" id="password" placeholder="Password *" required="required" autocomplete="off" title="Insert Your Password Here">

					<input type="password" class="form__input" name="cpassword" id="cpassword" placeholder="Confirm Password *" required="required" autocomplete="off" title="Re-Enter Your Password Here">

					<input type="submit" class="switch__button button" name="signup" value="submit">
         
        </form>
      </div>
      <div class="container b-container" id="b-container">
        <form class="form" id="b-form" method="POST" action="login.php">
          <h2 class="form_title title">Sign in to Website</h2>
          <span class="form__span"></span>
          <input type="text" class="form__input" name="email" id="email" placeholder="Email Address *" required="required" autocomplete="off" title="Insert Your Email Address Here">
					<input type="password" class="form__input" name="password" id="password" placeholder="Password *" required="required" autocomplete="off" title="Insert Your Password Here">
					<input type="submit" class="switch__button button" name="login" value="SIGN IN">
        </form>
      </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Student Record Mangement system</h2>
          <p class="switch__description description"></p>
          <button class="switch__button button switch-btn">SIGN IN</button>
        </div>
        <div class="switch__container is-hidden" id="switch-c2">
          <h2 class="switch__title title">Hello Students!</h2>
          <p class="switch__description description">Click Sign up to register yourself</p>
          <button type="submit"  value="Login" class="switch__button button switch-btn">SIGN UP</button>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
<!-- partial -->
  <script src=''></script><script  src="./script.js"></script>

</body>
</html>
