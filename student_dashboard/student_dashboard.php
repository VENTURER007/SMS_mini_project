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

  <div class="search position-relative text-center px-4 py-3 mt-2">
    <input type="text" class="form-control w-100 border-0 bg-transparent" placeholder="Search here">
    <i class="fa fa-search position-absolute d-block fs-6"></i>
  </div>

  <ul class="categories list-unstyled">
  <script>
      function dashboard(){

        document.getElementById("personal_details_div").style.display="none";
        document.getElementById("academic_details_div").style.display="none";


      }

      function personal_details(){
      
      document.getElementById("personal_details_div").style.display="block";
      document.getElementById("academic_details_div").style.display="none";
      
      }
      
      function academic_details(){

        document.getElementById("personal_details_div").style.display="none";
        document.getElementById("academic_details_div").style.display="block";


      }
      
      </script>
    <li >
      <i class="uil-estate fa-fw"></i><a class="button" onclick="dashboard();"> Dashboard</a>
      
     
    <li >
      <i class="uil-user"></i><a class="button" onclick="personal_details();" id="personal_details"> Personal Details</a>
     
      <ul class="sidebar-dropdown list-unstyled">
       
      </ul>
    </li>
    <li class="">
      <i class="uil-book-alt"></i><a class="button" onclick="academic_details();" id="academic_details">Academic Details</a>
      <ul class="sidebar-dropdown list-unstyled">
       
      </ul>
    </li>
    <li class="">
      <i class="uil-layers"></i><a href="#">CE marks</a>
      <ul class="sidebar-dropdown list-unstyled">
       
      </ul>
    </li>
    <li class="">
      <i class="uil-layer-group"></i><a href="#">Results</a>
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
            <a class="nav-link" href="logout.php"><i class="uil-sign-out-alt"></i></a>
            
            
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
      <div class="content rounded-3 p-3">
        <h1 class="fs-3">Welcome to Dashboard</h1>
        <p class="mb-0">Hello <?php echo $name; ?>, welcome to your awesome dashboard!</p>
      </div>
    </div>
  </div>
<div class="input__div" id='personal_details_div'>
    
            <label for="email" class="input__label"> Email</label><input id="email"type="text" class="form__input" value = "<?php echo $_SESSION['loginEmail'];?>"><br>
            <label for="dob" class="input__label"> Date of birth</label><input id="dob"type="text" class="form__input" value = "<?php echo $_SESSION['dob'];?>"><br>
            <label for="father" class="input__label">Father name</label><input id="father"type="text" class="form__input" value = "<?php echo $_SESSION['father'];?>"><br>
            <label for="mother" class="input__label">Mother name</label><input id="mother"type="text" class="form__input" value = "<?php echo $_SESSION['mother'];?>"><br>
            <label for="blood" class="input__label"> Blood Group</label><input id="blood"type="text" class="form__input" value = "<?php echo $_SESSION['blood'];?>"><br>
            
</div>

<div class="input__div" id='academic_details_div'>

<label for="email" class="input__label">Year of Admission</label><input  type="text" class="form__input" value = "<?php echo $_SESSION['yoa'];?>"><br>
<label for="dob" class="input__label">Course</label><input type="text" class="form__input" value = "<?php echo $_SESSION['course'];?>"><br>
<label for="blood" class="input__label">Semester</label><input  type="text" class="form__input" value = "<?php echo $_SESSION['semester'];?>"><br>

</div> 
   
</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script><script  src="./script.js"></script>

</body>
</html>
