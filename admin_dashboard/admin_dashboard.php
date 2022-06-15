
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
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
  <div class="sidebar-header d-flex align-items-left px-3 py-4">
   
    <div class="ms-2">
      <h5 class="fs-6 mb-0">
        <a class="text-decoration-none" href="#">Hi Admin</a>
      </h5>
      
    </div>
  </div>

  <div class="search position-relative text-center px-4 py-3 mt-2">
    <input type="text" class="form-control w-100 border-0 bg-transparent" placeholder="Search here">
    <i class="fa fa-search position-absolute d-block fs-6"></i>  
  </div>

  <ul class="categories list-unstyled">
  <script type="text/javascript">
      function dashboard(){

        document.getElementById("semester_div").style.display="none";
        document.getElementById("branch_div").style.display="none";
        
        


      }

      function get_branch_id(branch){
      document.getElementById("semester_div").style.display="block";
      document.getElementById("branch_div").style.display="none";
      const course = new FormData();

      course.append("branch" , branch);

      const xhr = new XMLHttpRequest();
      xhr.open("POST" , "ajax.php" , true);
      xhr.send(course);

     }


     function get_semester_id(sem){
      document.getElementById("semester_div").style.display="block";
      document.getElementById("branch_div").style.display="none";
      
      const semester = new FormData();

      semester.append("semester" , sem);

      const xhr = new XMLHttpRequest();
      
      xhr.onload=function(){
        
      document.getElementById("table_div").style.display="block";
      document.getElementById("semester_div").style.display="none";
      document.getElementById("branch_div").style.display="none";

      document.getElementById("table_div").innerHTML = xhr.responseText;

      }
      
      xhr.open("POST" , "ajax.php" , true);
      xhr.send(semester);
      
    }


    function table(){
      document.getElementById("table_div").style.display="block";
      document.getElementById("semester_div").style.display="none";
      document.getElementById("branch_div").style.display="none";
      

    }


      function records(){
      
      document.getElementById("branch_div").style.display="block";
      
      }



      
      
      
      </script>
    <li >
      <i class="uil-estate fa-fw"></i><a class="button" onclick="dashboard();"> Dashboard</a>
      
     
  
    <li class="">
      <i class="uil-book-alt"></i><a class="button" onclick="records();" id="academic_details">Student Records</a>
      <ul class="sidebar-dropdown list-unstyled">
       
      </ul>
    </li>
    <li class="">
      <i class="uil-layers"></i><a href="#">Publish CE marks</a>
      <ul class="sidebar-dropdown list-unstyled">
       
      </ul>
    </li>
    <li class="">
      <i class="uil-layer-group"></i><a href="#"> Publish Results</a>
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
        <h1 class="fs-3">Welcome to Admin Dashboard</h1>

        <p class="mb-0">Hello Admin welcome to your dashboard!</p>
      </div>
    </div>
  </div>
<div class="input__div" id='branch_div'>
    
            <li name="cs" id="CS" onclick="get_branch_id(this.id);">BTECH-CS</li>
            <br><br>
            <li name="it" id="IT" onclick="get_branch_id(this.id);">BTECH-IT</li>
            <br><br>
            <li name="me" id="ME" onclick="get_branch_id(this.id);">BTECH-ME</li>
            <br><br>
            <li name="eee" id="EEE" onclick="get_branch_id(this.id);">BTECH-EEE</li>
            <br><br>
            <li name="ec" id="EC" onclick="get_branch_id(this.id);">BTECH-EC</li>
            <br><br>
            <li name="ce" id="CE" onclick="get_branch_id(this.id);">BTECH-CE</li>
            
            
            
</div>

<div class="input__div" id='semester_div'>

<label onclick="get_semester_id(this.id);" id="1" name="">semester 1</label>
<br><br>
<label onclick="get_semester_id(this.id);" id="2" name="">semester 2</label>
<br><br>
<label onclick="get_semester_id(this.id);" id="3" name="">semester 3</label>
<br><br>
<label onclick="get_semester_id(this.id);" id="4" name="">semester 4</label>
<br><br>
<label onclick="get_semester_id(this.id);" id="5" name="">semester 5</label>
<br><br>
<label onclick="get_semester_id(this.id);" id="6" name="">semester 6</label>
<br><br>
<label onclick="get_semester_id(this.id);" id="7" name="">semester 7</label>
<br><br>
<label onclick="get_semester_id(this.id);" id="8" name="">semester 8</label>


</div> 

<div id ="table_div" class="table-wrapper">




</div>
   
</section>
<!-- partial -->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script><script  src="./script.js"></script>

</body>
</html>
