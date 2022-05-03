<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>STUDENT REGISTRATION</title>
  <link rel="stylesheet" href="./register.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Student Registration Form</h2>
      <hr>
    </div>
    <div class="row clearfix">
      <div class="">
        <form action="config.php" method="post">
          <p>Please fill  in this form to create an account</a>.
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password2" placeholder="Re-type Password" required />
          </div>
          <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="first_name" placeholder="First Name" />
              </div>
            </div>
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="last_name" placeholder="Last Name" required />
              </div>
            </div>
          </div>
            	<div class="input_field radio_option">
              <input type="Radio" name='g' value="male" id="rd1">
              <label for="rd1">Male</label>
              <input type="Radio" name='g' value="female" id="rd2">
              <label for="rd2">Female</label>
              </div>
              <div class="input_field select_option">
                <select name="branch">
                  <option value="" disabled selected>Select Branch</option>
                  <option value="IT">IT</option>
                  <option value="CS">CS</option>
                  <option value="EEE">EEE</option>
                  <option value="ME">ME</option>
                  <option value="EC">EC</option>
                </select>
                <div class="select_arrow"></div>
              </div>
            
            <div class="input_field checkbox_option"
            </div>
          <input class="button" name="submit" type="submit" value="Register" />
           <div class="container signin">
           <p>Already have an account? <a href="login.php">Log in</a>.</p>
        </form>
      </div>
<!-- partial -->
  
</body>

</html>