<?php

include ('/home/venturer/SMS_mini_project/db.php');
//starting session

session_start();

//store session variables

$user_id=$_SESSION['user_id'];
$name=$_SESSION['loginName'];
$email=$_SESSION['loginEmail'];
$role=$_SESSION['role'];
$branch=$_SESSION['course'];
$mobile=$_SESSION['mobile'];
$address=$_SESSION['address'];
$gender=$_SESSION['gender'];

// $sql = "SELECT * FROM users where email='$email'";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result) > 0){

// while($row = mysqli_fetch_assoc($result)){



// }

// }






?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Page</title>
  <!-- CSS only -->
  <link href="/hover.css" rel="stylesheet" media="all">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'><link rel="stylesheet" href="./style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"/>
<script src="https://code.jquery.com/jquery-latest.min.js"/>
<script></script>
</head>
<body>
<!-- partial:index.partial.html -->
<aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
  <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
  <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
    <?php  include 'dashboard_elements.php'; ?>
    <div class="ms-2">
      <h5 class="fs-6 mb-0">
        <a class="text-decoration-none" href="#"><?php echo $name; ?></a>
      </h5>
      <p class="mt-1 mb-0"><?php echo $branch; ?></p>
    </div>
  </div>

  

  <ul class="container list-unstyled">
  <script>
      function dashboard(){

        document.getElementById("personal_details_div").style.display="none";
        document.getElementById("academic_details_div").style.display="none";
        document.getElementById("ce_mark_div").style.display="none";
        document.getElementById("welcome_message").style.display="block";
        document.getElementById("result_div").style.display="none";
        document.getElementById("documents_div").style.display="none";


      }

      function personal_details(){
      
      document.getElementById("personal_details_div").style.display="block";
      document.getElementById("academic_details_div").style.display="none";
      document.getElementById("ce_mark_div").style.display="none";
      document.getElementById("welcome_message").style.display="none";
        document.getElementById("result_div").style.display="none";
        document.getElementById("documents_div").style.display="none";
      
      }
      
      function academic_details(){

        document.getElementById("personal_details_div").style.display="none";
        document.getElementById("academic_details_div").style.display="block";
        document.getElementById("ce_mark_div").style.display="none";
        document.getElementById("welcome_message").style.display="none";
        document.getElementById("result_div").style.display="none";
        document.getElementById("documents_div").style.display="none";


      }

      function ce_mark(id){
      document.getElementById("personal_details_div").style.display="none";
      document.getElementById("academic_details_div").style.display="none";
      
      document.getElementById("welcome_message").style.display="none";
      document.getElementById("result_div").style.display="none";
      document.getElementById("documents_div").style.display="none";
      

  const data = new FormData();
  const xhr = new XMLHttpRequest();

  xhr.onload=function(){
    document.getElementById("ce_mark_div").style.display="block";
    document.getElementById("ce_mark_div").innerHTML = xhr.responseText;

  }


  data.append("id" , id);
  xhr.open("POST" , "ce_mark.php" , true);
  xhr.send(data);



      }
      
      
      
      function results(id){
      
      document.getElementById("personal_details_div").style.display="none";
      document.getElementById("academic_details_div").style.display="none";
      document.getElementById("ce_mark_div").style.display="none";
      document.getElementById("result_div").style.display="block";
      document.getElementById("welcome_message").style.display="none";
      document.getElementById("documents_div").style.display="none";
       
      

const data = new FormData();
const xhr = new XMLHttpRequest();

  xhr.onload=function(){

    document.getElementById("result_div").innerHTML = xhr.responseText;

    }


  data.append("id" , id);
  xhr.open("POST" , "result.php" , true);
  xhr.send(data);



      }
function personal_update(){

const data = new FormData();
const xhr = new XMLHttpRequest();
let update = document.getElementById("personal_button").value;
let name = document.getElementById("name").value;
let email = document.getElementById("email").value;
let dob = document.getElementById("dob").value;
let father = document.getElementById("father").value;
let mother = document.getElementById("mother").value;
let blood = document.getElementById("blood").value;
let mobile = document.getElementById("mobile").value;
let address = document.getElementById("address").value;
var gender = document.querySelector('input[name="g"]:checked').value;


  xhr.onload=function(){

    // location.reload();
    // document.getElementById("personal_details").click();
    
    personal_details();
    window.alert("Personal details updated sucessfully!")

    // document.getElementById("personal_details_div").innerHTML = xhr.responseText;

  }
  data.append("update",update)
  data.append("name",name);
  data.append("email" , email);
  data.append("dob" , dob);
  data.append("father" , father);
  data.append("mother" , mother);
  data.append("blood" , blood);
  data.append("mobile", mobile);
  data.append("address", address);
  data.append("gender", gender);
  xhr.open("POST" , "update.php" , true);
  xhr.send(data);

}


function academic_update(){
  const data = new FormData();
const xhr = new XMLHttpRequest();
let yoa = document.getElementById("yoa").value;
let branch = document.getElementById("branch").value;
let semester = document.getElementById("semester").value;

  xhr.onload=function(){

    window.alert("Academic details updated sucessfully!")
    // document.getElementById("academic_details_div").innerHTML = xhr.responseText;
    // academic_details();
    // alert("Academic details updated sucessfully!");
  }


  data.append("yoa" , yoa);
  data.append("branch" , branch);
  data.append("semester" , semester);
  xhr.open("POST" , "update.php" , true);
  xhr.send(data);

}

function doc_update(id){
  const data = new FormData();
const xhr = new XMLHttpRequest();
document.getElementById("personal_details_div").style.display="none";
      document.getElementById("academic_details_div").style.display="none";
      document.getElementById("ce_mark_div").style.display="none";
      document.getElementById("result_div").style.display="none";
      document.getElementById("welcome_message").style.display="none";
      document.getElementById("documents_div").style.display="block";

xhr.onload=function(){

                      
  document.getElementById("documents_div").innerHTML = xhr.responseText;




}

data.append("id" , id);
xhr.open("POST" , "doc_update.php" , true);
xhr.send(data);


}

function doc_update_upload() {

  var img = document.getElementById("img1").files;
var plustwo_cert = document.getElementById("doc1").files;
let update = document.getElementById("update_button").value;
const data = new FormData();
const xhr = new XMLHttpRequest();

xhr.onload=function(){
  
  window.alert(xhr.responseText);
  




}
data.append("update" , update);
data.append("img" , img[0]);
data.append("plustwo_cert" ,plustwo_cert[0]);
xhr.open("POST" , "doc_update2.php" , true);
xhr.send(data);


}

      
      </script>
    <li >
      <button class="hvr-radial-out hvr-grow-shadow" onclick="dashboard();"><i class=" hvr-icon-pulse-grow uil-estate fa-fw"></i> Dashboard</button>
      
     
    <li >
      <button class="hvr-radial-out hvr-grow-shadow" onclick="personal_details();" id="personal_details"><i class="hvr-icon-pulse-grow uil-user"></i> Personal Details</button>
     
      <ul class="sidebar-dropdown list-unstyled">
       
      </ul>
    </li>
    <li class="">
      <button class="hvr-radial-out hvr-grow-shadow" onclick="academic_details();" id="academic_details"><i class="hvr-icon-pulse-grow uil-book-alt"></i>Academic Details</button>
      <ul class="sidebar-dropdown list-unstyled">
       
      </ul>
    </li>
    <li class="">
      <button class="hvr-radial-out hvr-grow-shadow" onclick="ce_mark(<?php echo $user_id; ?>);" href="#"><i class="hvr-icon-pulse-grow uil-layers"></i>CE marks</button>
      <ul class="sidebar-dropdown list-unstyled">
       
      </ul>
    </li>
    <li class="">
      <button class="hvr-radial-out hvr-grow-shadow" onclick="results(<?php echo $user_id; ?>);" href="#"><i class="hvr-icon-pulse-grow uil-layer-group"></i>Results</button>
      <ul class="sidebar-dropdown list-unstyled">
        
      </ul>
    </li>
    <li class="">
      <button class="hvr-radial-out hvr-grow-shadow" onclick="doc_update(<?php echo $user_id; ?>);" href="#"><i class="hvr-icon-pulse-grow uil uil-book"></i>Documents</button>
      <ul class="sidebar-dropdown list-unstyled">
        
      </ul>
    </li>
    
  </ul>
</aside>

<section id="wrapper">
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid mx-2">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="uil-bars text-white"></i>
        </button>
        <a class="navbar-brand" href="#">Student Record Management<span class="main-color"> System</span></a>
      </div>
      <div class="collapse navbar-collapse" id="toggle-navbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Settings -->
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">My account</a>
              </li>
              <li><a class="dropdown-item" href="#">My inbox</a>
              </li>
              <li><a class="dropdown-item" href="#">Help</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Log out</a></li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a class="logout" href="">Logout</a>
            <a class="nav-link"  href="logout.php"><i  class="uil-sign-out-alt"></i></a>
            
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i data-show="show-side-navigation1" class="uil-bars show-side-btn"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="p-4">
    <div class="welcome">
      <div id="welcome_message" class="content rounded-3 p-3">
        <h1 style="color: var(--bs-blue);" class="fs-3">Welcome to Dashboard</h1>
        <p style="color: var(--bs-blue);" class="mb-0">Hello <?php echo $name; ?>, welcome to your dashboard!</p>
      </div>
    </div>
  </div>
<div class="input__div" id='personal_details_div'>
            <label for="name" class="input__label">Name</label><input type="text" class="form__input form-control" id="name" placeholder="Full Name *" value = "<?php echo $_SESSION['loginName'];?>" ><br>
            <label for="email" class="input__label"> Email</label><input id="email"type="text" class="form__input form-control" value = "<?php echo $_SESSION['loginEmail'];?>"><br>
            <label for="dob" class="input__label"> Date of birth</label><input id="dob"type="text" class="form__input form-control" value = "<?php echo $_SESSION['dob'];?>"><br>
            <label for="father" class="input__label">Father name</label><input id="father"type="text" class="form__input form-control" value = "<?php echo $_SESSION['father'];?>"><br>
            <label for="mother" class="input__label">Mother name</label><input id="mother"type="text" class="form__input form-control" value = "<?php echo $_SESSION['mother'];?>"><br>
            <label for="blood" class="input__label"> Blood Group</label><input id="blood"type="text" class="form__input form-control" value = "<?php echo $_SESSION['blood'];?>"><br>
            <label for="mobile" class="input__label"> Mobile number</label><input id="mobile"type="text" class="form__input form-control" value = "<?php echo $_SESSION['mobile'];?>"><br>
            <div class="input_field radio_option">
            <label for="gender" class="input__label">Gender</label> <br> 
            <input type="Radio" name='g' value="male" id="rd1" <?php if($_SESSION['gender']=="male"){ echo "checked";} ?>>
              <label for="rd1">Male</label>
              <input type="Radio" name='g' value="female" id="rd2"  <?php if($_SESSION['gender']=="female"){ echo "checked";} ?>>
              <label for="rd2">Female</label>
              </div><br>
            <label for="address" class="input__label">Address</label><input id="address"type="textarea" style="
	height: 150px;" class="form__input form-control" value = "<?php echo $_SESSION['address'];?>"><br>
            <button id="personal_button" class="hvr-radial-out" value="update" onclick="personal_update();">update</button>
</div>

<div class="input__div" id='academic_details_div'>


<label for="email" class="input__label">Year of Admission</label><input id="yoa"  type="text" class="form__input form-control" value = "<?php echo $_SESSION['yoa'];?>"><br>
<label for="dob" class="input__label">Course</label><input id="branch" type="text" class="form__input form-control" value = "<?php echo $_SESSION['course'];?>"><br>
<label for="blood" class="input__label">Semester</label><input id="semester"  type="text" class="form__input form-control" value = "<?php echo $_SESSION['semester'];?>"><br>
<button class="hvr-radial-out" id="academic_button"  onclick="academic_update();">update</button>
</div> 


<div class="table_wrapper" style="color: var(--dk-gray-400);
    margin-left: 21px;" id='ce_mark_div'>

  </div>
<div id="documents_div"></div>
<div style="color: var(--dk-gray-400);margin-left: 21px;" id='result_div'></div>    
   
</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script><script  src="./script.js"></script>

</body>
</html>
