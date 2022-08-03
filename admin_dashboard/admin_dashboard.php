
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
  <!-- CSS only -->
  <link href="/hover.css" rel="stylesheet" media="all">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <script type="text/javascript" src="js/mdb.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"/>
<script src="https://code.jquery.com/jquery-latest.min.js"/>
<script></script>
</head>
<body  scroll="no" style="overflow: auto;">
<!-- partial:index.partial.html -->
<aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
  <i class="uil-bars close-aside d-md-none d-lg-none "  data-close="show-side-navigation1"></i>
  <div class="sidebar-header d-flex align-items-left px-3 py-4">
   
    <div class="ms-2">
      <h5 class="fs-6 mb-0">
        <a class="text-decoration-none" href="#"></a>
      </h5>
      
    </div>
  </div>

  

  <ul class="categories list-unstyled">
  <script type="text/javascript">

  function srUpdate() {

const data = new FormData();
const xhr = new XMLHttpRequest();
let update = document.getElementById("button").value;
let name = document.getElementById("name").value;
let email = document.getElementById("email").value;
let dob = document.getElementById("dob").value;
let father = document.getElementById("father").value;
let mother = document.getElementById("mother").value;
let blood = document.getElementById("blood").value;
let mobile = document.getElementById("mobile").value;
let address = document.getElementById("address").value;
var gender = document.querySelector('input[name="g"]:checked').value;
let yoa = document.getElementById("yoa").value;
let branch = document.getElementById("branch1").value;
let semester = document.getElementById("semester1").value;

  xhr.onload=function(){

    document.getElementById("form").innerHTML = xhr.responseText;

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
  data.append("yoa" , yoa);
  data.append("branch1" , branch);
  data.append("semester1" , semester);

  xhr.open("POST" , "update_insert.php" , true);
  xhr.send(data);

			}


      function dashboard(){

        
    document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none"; 
    document.getElementById("ce_mark_semester_div").style.display="none";
      document.getElementById("results_div").style.display="none";
      document.getElementById("ce_mark_div").style.display="none";  
        


      }

      function get_branch_id(branch){
      document.getElementById("semester_div").style.display="block";
      
           
    document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("results_div").style.display="none";
    document.getElementById("ce_mark_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none"; 
    document.getElementById("ce_mark_semester_div").style.display="none";
      const course = new FormData();

      course.append("branch" , branch);

      const xhr = new XMLHttpRequest();
      xhr.open("POST" , "ajax.php" , true);
      xhr.send(course);

     }


     function get_semester_id(sem){
      document.getElementById("semester_div").style.display="block";
     

           
    document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none"; 
    document.getElementById("ce_mark_semester_div").style.display="none";
     document.getElementById("results_div").style.display="none";
     document.getElementById("ce_mark_div").style.display="none"; 
      const semester = new FormData();

      semester.append("semester" , sem);

      const xhr = new XMLHttpRequest();
      
      xhr.onload=function(){
        
    document.getElementById("table_div").style.display="block"; 
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none"; 
    document.getElementById("ce_mark_semester_div").style.display="none";
document.getElementById("results_div").style.display="none";
document.getElementById("ce_mark_div").style.display="none";
      document.getElementById("table_div").innerHTML = xhr.responseText;

      }
      
      xhr.open("POST" , "ajax.php" , true);
      xhr.send(semester);
      
    }


    function table(){
      document.getElementById("table_div").style.display="block";
      
           
   
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none"; 
    document.getElementById("ce_mark_semester_div").style.display="none";
     document.getElementById("results_div").style.display="none";
     document.getElementById("ce_mark_div").style.display="none"; 

    }


      function records(){
      
      document.getElementById("branch_div").style.display="block";
           
    document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
     
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none"; 
    document.getElementById("ce_mark_semester_div").style.display="none";
     document.getElementById("results_div").style.display="none";
     document.getElementById("ce_mark_div").style.display="none"; 
      }

      function update(index){
        
        
        
        const data = new FormData();
        const xhr = new XMLHttpRequest();
                
        
       var email= document.getElementById(index).dataset.value;
        
        
        
        xhr.onload=function(){
        
          
          
          document.getElementById("table_div").style.display="none";  
               
    
    document.getElementById("update_div").style.display="block";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none"; 
    document.getElementById("ce_mark_semester_div").style.display="none";
    document.getElementById("results_div").style.display="none";
    document.getElementById("ce_mark_div").style.display="none";
          document.getElementById("update_div").innerHTML = xhr.responseText;
        }
        
        data.append("index" , email);
        
        xhr.open("POST" , "update.php" , true);
                xhr.send(data);
        
        }


function delete_records(id){

  
  const data = new FormData();
  const xhr = new XMLHttpRequest();
  
  xhr.onload=function(){
    document.getElementById("table_div").style.display="block";  
    
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none"; 
    document.getElementById("ce_mark_semester_div").style.display="none";
    document.getElementById("table_div").innerHTML = xhr.responseText;document.getElementById("results_div").style.display="none";
    document.getElementById("ce_mark_div").style.display="none";
  }
  data.append("id" , id);
  xhr.open("POST" , "delete.php" , true);
  xhr.send(data);

}

function ce_marks_branch(branch){
    document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none";  
    document.getElementById("ce_mark_semester_div").style.display="block";
document.getElementById("results_div").style.display="none";
document.getElementById("ce_mark_div").style.display="none";

  const data = new FormData();
  const xhr = new XMLHttpRequest();


  data.append("branch" , branch);
  xhr.open("POST" , "ce_mark.php" , true);
  xhr.send(data);
    
}



function results_branch(branch){
  document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="block";  
    document.getElementById("ce_mark_semester_div").style.display="none";
    document.getElementById("results_div").style.display="none";
    document.getElementById("ce_mark_div").style.display="none";const data = new FormData();
  const xhr = new XMLHttpRequest();


  data.append("branch" , branch);
  xhr.open("POST" , "result.php" , true);
  xhr.send(data);
    

}


function ce_marks_semester(semester){

    document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none";  
    document.getElementById("ce_mark_semester_div").style.display="none";
    document.getElementById("ce_mark_div").style.display="block";
document.getElementById("results_div").style.display="none";

    const data = new FormData();
  const xhr = new XMLHttpRequest();

  xhr.onload=function(){

    document.getElementById("ce_mark_div").innerHTML = xhr.responseText;

  }


  data.append("semester" , semester);
  xhr.open("POST" , "ce_mark.php" , true);
  xhr.send(data);




}

function results_semester(semester){
  document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none";  
    document.getElementById("ce_mark_semester_div").style.display="none";
    document.getElementById("results_div").style.display="block";
    document.getElementById("ce_mark_div").style.display="none";const data = new FormData();
  const xhr = new XMLHttpRequest();

  xhr.onload=function(){

    document.getElementById("results_div").innerHTML = xhr.responseText;

  }


  data.append("semester" , semester);
  xhr.open("POST" , "result.php" , true);
  xhr.send(data);
}

function ce_marks(){

    document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="block";
    document.getElementById("result_semester_div").style.display="none";  
    document.getElementById("ce_mark_semester_div").style.display="none";
document.getElementById("results_div").style.display="none";
document.getElementById("ce_mark_div").style.display="none";
}

function subject(event){

event.preventDefault();
var subject = document.getElementById("subject_input").value;



const data = new FormData();
const xhr = new XMLHttpRequest();

  xhr.onload=function(){

    document.getElementById("response").innerHTML = xhr.responseText;

  }


  data.append("subject" , subject);
  xhr.open("POST" , "ce_mark_publish.php" , true);
  xhr.send(data);



}


function enter_ce_mark(event,n){

  document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none";  
    document.getElementById("ce_mark_semester_div").style.display="none";
    document.getElementById("ce_mark_div").style.display="none";
    document.getElementById("results_div").style.display="none";

  event.preventDefault();
  const data = new FormData();
  const xhr = new XMLHttpRequest();
  var classes = document.getElementsByClassName("ce_mark_input");
  
  var input = document.getElementsByName('array[]');
 var ce_marks=[];
 for (var i = 0; i < input.length; i++) {
     
    var a = input[i];
     let k =  a.value;
     console.log(k);
    ce_marks.push(k);
    
}
var id=[];
for (var i = 0; i < classes.length; i++) {
     
     var a = classes[i];
      let k =  a.dataset.value;
      console.log(k);
     id.push(k);
     
 }

xhr.onload=function(){

document.getElementById("response").innerHTML = xhr.responseText;

document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none";  
    document.getElementById("ce_mark_semester_div").style.display="none";
    document.getElementById("ce_mark_div").style.display="none";
    document.getElementById("results_div").style.display="none";
    document.getElementById("ce_mark_div").style.display="none";

}

var json={
"ce_marks": ce_marks,
"id":id
};
//  var json[markss] = JSON.stringify(marks);
//   json[idss] = JSON.stringify(id);

json_string=JSON.stringify(json);
 
 console.log(json_string);
 
 xhr.open("POST" , "ce_mark_add.php" , true);
 xhr.setRequestHeader('Content-Type',"application/json");

 
 
 
  
  xhr.send(json_string);

}


function results(){

  document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="block";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none";  
    document.getElementById("ce_mark_semester_div").style.display="none";
document.getElementById("results_div").style.display="none";
document.getElementById("ce_mark_div").style.display="none";

}

function subject_result(event){

event.preventDefault();
var subject = document.getElementById("subject_input").value;
var exam = document.getElementById("exam_input").value;



const data = new FormData();
const xhr = new XMLHttpRequest();

  xhr.onload=function(){

    document.getElementById("response").innerHTML = xhr.responseText;

  }


  data.append("subject" , subject);
  data.append("exam",exam)

  xhr.open("POST" , "result_add.php" , true);
  xhr.send(data);



}


function enter_result(event,n){

  event.preventDefault();
  const data = new FormData();
  const xhr = new XMLHttpRequest();
  var classes = document.getElementsByClassName("exam_mark_input");
  
  var input = document.getElementsByName('result_array[]');
 var marks=[];
 for (var i = 0; i < input.length; i++) {
     
    var a = input[i];
     let k =  a.value;
    marks.push(k);
    
}
var id=[];
for (var i = 0; i < classes.length; i++) {
     
     var a = classes[i];
      let k =  a.dataset.value;
     id.push(k);
     
 }

xhr.onload=function(){

document.getElementById("response").innerHTML = xhr.responseText;

document.getElementById("table_div").style.display="none";  
    document.getElementById("update_div").style.display="none";
    document.getElementById("branch_div").style.display="none";  
    document.getElementById("semester_div").style.display="none";
    document.getElementById("result_branch_div").style.display="none";  
    document.getElementById("ce_mark_branch_div").style.display="none";
    document.getElementById("result_semester_div").style.display="none";  
    document.getElementById("ce_mark_semester_div").style.display="none";
    document.getElementById("ce_mark_div").style.display="none";
document.getElementById("results_div").style.display="none";
document.getElementById("ce_mark_div").style.display="none";
}

var json={
"marks": marks,
"id":id
};
//  var json[markss] = JSON.stringify(marks);
//   json[idss] = JSON.stringify(id);

json_string=JSON.stringify(json);
 
 console.log(json_string);
 
 xhr.open("POST" , "result_publish.php" , true);
 xhr.setRequestHeader('Content-Type',"application/json");

 
 
 
  
  xhr.send(json_string);


}



      
     
      
      </script>
    <li >
      <buttonn class=" hvr-radial-out hvr-grow-shadow"   onclick="dashboard();"><i class="uil-estate hvr-icon-pulse-grow"></i> Dashboard      </buttonn>
      </li>
     
  
    <li >
      <buttonn  class="hvr-radial-out hvr-grow-shadow"  onclick="records();" id="academic_details"><i class="uil-book-alt hvr-icon-pulse-grow"></i>Student Records</buttonn>
      <ul class="sidebar-dropdown list-unstyled">
       </li>
      </ul>
    </li>
    <li class="">
      <buttonn href="#"   class="hvr-radial-out hvr-grow-shadow" onclick="ce_marks();" id="ce_marks"><i class="uil-layers hvr-icon-pulse-grow"></i>Publish CE marks</buttonn>
      <ul class="sidebar-dropdown list-unstyled">
       </li>
      </ul>
    </li>
    <li class="">
      <buttonn href="#" class="hvr-radial-out hvr-grow-shadow" onclick="results();" id="results"><i class="uil-layer-group hvr-icon-pulse-grow"></i> Publish Results</buttonn>
      <ul class="sidebar-dropdown list-unstyled">
       </li> 
      </ul>
    </li>
    
  </ul>
</aside>

<section id="wrapper">
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid">
      <div class="navbar-header">
        <buttonn class="navbar-toggler" type="buttonn" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="uil-bars text-white"></i>
        </buttonn>
        <a class="navbar-brand"  class="text-arran" href="#">Student Record Management<span class="main-color"> System</span></a>
      </div>
      <div class="collapse navbar-collapse" id="toggle-navbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="buttonn" data-bs-toggle="dropdown" aria-expanded="false">
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
            
            <a class="nav-link" href="logout.php"><i style="color: #1963ec;" class="uil-sign-out-alt"></i></a>
            
            
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i data-show="show-side-navigation1" style="
    color: #1963ec;" class="uil-bars show-side-btn"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="p-4">
    <div  class="welcome1" class="welcome">
      <div class="content rounded-3 p-3">
          <h1  class="dashcolour" style="
          font-size: calc(1.375rem + 0.5vw);"  class="fs-3">Welcome to Admin Dashboard</h1>

          <p  class="dashcolour1" class="mb-0">Hello Admin welcome to your dashboard!</p>
          <p id="response"></p>
          <?php include 'respond.php';?>
      </div>
    </div>
  </div>
<div class="input__div" id='branch_div'>
    
            <button class=" container hvr-float-shadow" name="cs" id="CS" onclick="get_branch_id(this.id);">BTECH-CS</button>
            <br>
            <button class=" container hvr-float-shadow" name="it" id="IT" onclick="get_branch_id(this.id);">BTECH-IT</button>
            <br>
            <button class=" container hvr-float-shadow" name="me" id="ME" onclick="get_branch_id(this.id);">BTECH-ME</button>
            <br>
            <button class=" container hvr-float-shadow" name="eee" id="EEE" onclick="get_branch_id(this.id);">BTECH-EEE</button>
            <br>
            <button class=" container hvr-float-shadow" name="ec" id="EC" onclick="get_branch_id(this.id);">BTECH-EC</button>
            <br>
            <button class=" container hvr-float-shadow" name="ce" id="CE" onclick="get_branch_id(this.id);">BTECH-CE</button>
            
            
            
</div>


<div class="input__div" id="ce_mark_branch_div">
    
            <button class=" container hvr-float-shadow" name="cs" id="CS" onclick="ce_marks_branch(this.id);">BTECH-CS</button>
            <br>
            <button class=" container hvr-float-shadow" name="it" id="IT" onclick="ce_marks_branch(this.id);">BTECH-IT</button>
            <br>
            <button class="container hvr-float-shadow" name="me" id="ME" onclick="ce_marks_branch(this.id);">BTECH-ME</button>
            <br>
            <button class=" container hvr-float-shadow" name="eee" id="EEE" onclick="ce_marks_branch(this.id);">BTECH-EEE</button>
            <br>
            <button class=" container hvr-float-shadow" name="ec" id="EC" onclick="ce_marks_branch(this.id);">BTECH-EC</button>
            <br>
            <button class=" container hvr-float-shadow" name="ce" id="CE" onclick="ce_marks_branch(this.id);">BTECH-CE</button>
            
            
            
</div>

<div class="input__div" id="result_branch_div">
    
            <button class=" container hvr-float-shadow" name="cs" id="CS" onclick="results_branch(this.id);">BTECH-CS</button>
            <br>
            <button class=" container hvr-float-shadow" name="it" id="IT" onclick="results_branch(this.id);">BTECH-IT</button>
            <br>
            <button class=" container hvr-float-shadow" name="me" id="ME" onclick="results_branch(this.id);">BTECH-ME</button>
            <br>
            <button class=" container hvr-float-shadow" name="eee" id="EEE" onclick="results_branch(this.id);">BTECH-EEE</button>
            <br>
            <button class=" container hvr-float-shadow" name="ec" id="EC" onclick="results_branch(this.id);">BTECH-EC</button>
            <br>
            <button class=" container hvr-float-shadow" name="ce" id="CE" onclick="results_branch(this.id);">BTECH-CE</button>
            
            
            
</div>

<div class="input__div" id='semester_div'>

<button class=" container hvr-float-shadow" onclick="get_semester_id(this.id);" id="1" name="">semester 1</button>
<br>
<button class=" container hvr-float-shadow" onclick="get_semester_id(this.id);" id="2" name="">semester 2</button>
<br>
<button class=" container hvr-float-shadow" onclick="get_semester_id(this.id);" id="3" name="">semester 3</button>
<br>
<button class=" container hvr-float-shadow" onclick="get_semester_id(this.id);" id="4" name="">semester 4</button>
<br>
<button class=" container hvr-float-shadow" onclick="get_semester_id(this.id);" id="5" name="">semester 5</button>
<br>
<button class=" container hvr-float-shadow" onclick="get_semester_id(this.id);" id="6" name="">semester 6</button>
<br>
<button class=" container hvr-float-shadow" onclick="get_semester_id(this.id);" id="7" name="">semester 7</button>
<br>
<button class=" container hvr-float-shadow" onclick="get_semester_id(this.id);" id="8" name="">semester 8</button>


</div> 


<div class="input__div" id='ce_mark_semester_div'>

<button class=" container hvr-float-shadow" onclick="ce_marks_semester(this.id);" id="1" name="">semester 1</button>
<br>
<button class=" container hvr-float-shadow" onclick="ce_marks_semester(this.id);" id="2" name="">semester 2</button>
<br>
<button class=" container hvr-float-shadow" onclick="ce_marks_semester(this.id);" id="3" name="">semester 3</button>
<br>
<button class=" container hvr-float-shadow" onclick="ce_marks_semester(this.id);" id="4" name="">semester 4</button>
<br>
<button class=" container hvr-float-shadow" onclick="ce_marks_semester(this.id);" id="5" name="">semester 5</button>
<br>
<button class=" container hvr-float-shadow" onclick="ce_marks_semester(this.id);" id="6" name="">semester 6</button>
<br>
<button class=" container hvr-float-shadow" onclick="ce_marks_semester(this.id);" id="7" name="">semester 7</button>
<br>
<button class=" container hvr-float-shadow" onclick="ce_marks_semester(this.id);" id="8" name="">semester 8</button>


</div> 

<div class="input__div" id='result_semester_div'>

<button class=" container hvr-float-shadow" onclick="results_semester(this.id);" id="1" name="">semester 1</button>
<br>
<button class=" container hvr-float-shadow" onclick="results_semester(this.id);" id="2" name="">semester 2</button>
<br>
<button class=" container hvr-float-shadow" onclick="results_semester(this.id);" id="3" name="">semester 3</button>
<br>
<button class=" container hvr-float-shadow" onclick="results_semester(this.id);" id="4" name="">semester 4</button>
<br>
<button class=" container hvr-float-shadow" onclick="results_semester(this.id);" id="5" name="">semester 5</button>
<br>
<button class=" container hvr-float-shadow" onclick="results_semester(this.id);" id="6" name="">semester 6</button>
<br>
<button class=" container hvr-float-shadow" onclick="results_semester(this.id);" id="7" name="">semester 7</button>
<br>
<button class=" container hvr-float-shadow" onclick="results_semester(this.id);" id="8" name="">semester 8</button>


</div> 
<div id ="table_div" class="container table-wrapper">




</div>

<div class="container table-wrapper" id="ce_mark_div"></div>
<div class="container table-wrapper" id="results_div"></div>

<div id="update_div">

</div>
   
</section>
<!-- partial -->


  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script><script  src="./script.js"></script>

</body>
</html>
