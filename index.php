<!DOCTYPE html>
<html id="html" lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Record Mangement System</title>
  <link rel="stylesheet" href="./style.css">
  <link   class="title" rel="shortcut icon" href="https://w7.pngwing.com/pngs/461/735/png-transparent-education-uganda-management-institute-school-student-shivaji-hat-orange-logo.png">

  
</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <script>

function get_data(){
 

  const data = new FormData();
const xhr = new XMLHttpRequest();
let name = document.getElementById("name").value;
let email = document.getElementById("email").value;
let dob = document.getElementById("dob").value;
let father = document.getElementById("father").value;
let mother = document.getElementById("mother").value;
let blood = document.getElementById("blood").value;
let mobile = document.getElementById("mobile").value;
let address = document.getElementById("address").value;
let yoa = document.getElementById("yoa").value;
let branch = document.getElementById("branch").value;
let password = document.getElementById("password").value;
let cpassword = document.getElementById("cpassword").value;
let semester = document.getElementById("semester").value;
let signup = document.getElementById("signup_button").value;
var img = document.getElementById("img").files;
var plustwo_cert = document.getElementById("plustwo_cert").files;
var gender = document.querySelector('input[name="g"]:checked').value;
// if (document.getElementById('rd1').checked){
//   let gender = document.getElementById('rd1').value;
//   data.append("gender" , gender);
// }else
// if(document.getElementById('rd2').checked){
//  let gender = document.getElementById('rd2').value;
//  data.append("gender" , gender);
// }else{
// console.log("select a gender");
// }
  data.append("gender",gender);
  data.append("name" , name);
  data.append("email" , email);
  data.append("dob" , dob);
  data.append("father" , father);
  data.append("mother" , mother);
  data.append("blood" , blood);
  data.append("mobile" , mobile);
  data.append("address" ,address);
  data.append("yoa" , yoa);
  data.append("branch" , branch);
  data.append("password" , password);
  data.append("cpassword" , cpassword);
  data.append("semester" , semester);
  data.append("signup" , signup);

  data.append("img" , img[0]);
  data.append("plustwo_cert" , plustwo_cert[0]);
  
  xhr.open("POST" , "gateway.php" , true);
  xhr.send(data);

  xhr.onload=function(){

document.getElementById("response").innerHTML = xhr.responseText;

}

}

  </script>
  </head>
  <body id="body">
    
    <div class="main">
      <div style="overflow-y:scroll;height: 100%;" class="container a-container" id="a-container">
 
          <span class="form__span"></span>
          <div  class="form"  id="a-form"  enctype="multipart/form-data">

          <h2 class="form_title title">Create Account</h2>
          <?php include "respond.php"; ?>
         <div id="response"  class='success-respond'></div>
          
         
          <input type="text" class="form__input" name="name" id="name" placeholder="Full Name *" required="required" title="Insert Your Full Name Here">

					<input type="text" class="form__input" name="email" id="email" placeholder="Email Address *" required="required" title="Insert Your Email Address">
          
          <input type="text" class="form__input" name="father_name" id="father" placeholder="Father Name *" required="required" title="Insert Your Father Name Here">

					<input type="text" class="form__input" name="mother_name" id="mother" placeholder="Mother Name *" required="required" title="Insert Your Mother Name Here">

          <input type="date" class="colour_c" name="dob" id="dob" placeholder="Date of birth" required="required" title="Insert Year of Date of birth">

          <input type="text" class="form__input" name="blood" id="blood" placeholder="Blood Group *" required="required" title="Insert Your Blood group">

          <input type="text" class="form__input" name="mobile" id="mobile" placeholder="Mobile number *" required="required" title="Insert Your Mobile number">

          <input type="textarea" style="height: 150px;padding-bottom: 32px;" class="form__input" name="address" id="address" placeholder="Address *" required="required" title="Insert Your Address">

          <div class="form__input">
            <label for="gender" class="input__label">Gender</label>
            <input type="Radio" name='g' value="male" id="rd1">
              <label for="rd1">Male</label>
              <input type="Radio" name='g' value="female" id="rd2">
              <label for="rd2">Female</label>
              </div>

          <input type="number" class="form__input" name="yoa" id="yoa" min="2012" max="2022" placeholder="Year of Admission *" required="required" title="Insert Your Year of Admission here">

          
                <select class="colour_c" name="branch" id="branch">
                  <option class=" colour_c" value="" disabled selected>Select Branch</option>
                  <option class=" colour_c "value="IT">IT</option>
                  <option class="colour_c value="CS">CS</option>
                  <option class=" colour_c" value="EEE">EEE</option>
                  <option class=" colour_c" value="ME">ME</option>
                  <option class=" colour_c" value="EC">EC</option>
                </select>
                <div class="select_arrow"></div>

          <input type="number" class="form__input" name="semester" id="semester" min="1" max="8" placeholder="Current semester *" required="required" title="Insert Your current semester here"> 
          
          <label class="form__input" for="img">Upload your passport size image (.png/.jpeg/.jpg)
          <input  type="file" id="img" name="img" accept="image/*">
          </label>
          
          <label class="form__input" for="plustwo_cert">Upload your qualification certificate (.png/.jpeg/.jpg)
          <input  type="file" id="plustwo_cert" name="plustwo_cert" accept="image/*">
          </label>
          
					<input type="password" class="form__input" name="password" id="password" placeholder="Password *" required="required" autocomplete="off" title="Insert Your Password Here">

					<input type="password" class="form__input" name="cpassword" id="cpassword" placeholder="Confirm Password *" required="required" autocomplete="off" title="Re-Enter Your Password Here">

				

          <input type="submit" onclick="get_data()"  id="signup_button" class="switch__button button1" name="signup" value="SIGN UP">
         
        </div>

      </div>
      <div class="container b-container" id="b-container">
        <form class="form" id="b-form" method="POST" action="login.php">
          <h2 class="form_title title">Sign in to Website</h2>
          <span class="form__span"></span>
          <input type="text" class="form__input" name="email" id="email_login" placeholder="Email Address *" required="required" autocomplete="off" title="Insert Your Email Address Here">
					<input type="password" class="form__input" name="password" id="password_login" placeholder="Password *" required="required" autocomplete="off" title="Insert Your Password Here">
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
    <script src="script.js"></script>
  </body>
</html>
<!-- partial -->
  <script src=''></script><script  src="./script.js"></script>

</body>
</html>
