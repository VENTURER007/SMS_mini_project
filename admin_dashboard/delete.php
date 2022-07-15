<?php
session_start();
include "/home/venturer/SMS_mini_project/db.php";

$id=$_POST['id'];

if(isset($id)){



// $query = "delete from users where email=$email";
$query = "DELETE FROM `users` WHERE `users`.`id` = $id;";

$stmt = mysqli_stmt_init($conn);
// $result = mysqli_query($conn, $query);

// Check if the request is ready to be use
if (!mysqli_stmt_prepare($stmt, $query)) {
    // If not ready display error and redirect user to previous page
    echo("sqlError");
    exit();
}else {

    
    // Replace the question mark with the appropriate information
    $result = mysqli_stmt_execute($stmt);
// $result=mysqli_query($stmt,$query);

if($result === TRUE){

 if(isset($_SESSION['branch'])&&isset($_SESSION['semester'])){
     
    $branch=$_SESSION['branch'];
    $semester=$_SESSION['semester'];
 


$query=$conn->query("SELECT id,name,email,password,dob,father_name,mother_name,blood_group,year_of_admission,course_name,current_semester FROM users WHERE course_name='".$branch."' AND current_semester='".$semester."';");

if($query->num_rows>0){

    ?>
  
 <h1 style="color:#1963ec;; margin: 12px;">STUDENT RECORDS</h1>
 <table id="fl-table"  class="fl-table">
    <thead>
    <tr>
     <th>id</th>
     <th>name</th>
     <th>email</th>
     <th>Date of birth</th>
     <th>Father name</th>
     <th>Mother name</th>
     <th>blood group</th>
     <th>year of admission</th>
     <th>branch</th>
     <th>semester</th>
     <th>operations</th>
    
    </tr>
    </thead><tbody>

<?php
    while($row=$query->fetch_assoc()):

        
    
    echo "<tr>";                
    echo "<td  id='id'>";?><?php echo $row['id']; ?> <?php echo "</td>";
    echo "<td id='name'>";?><?php echo $row['name'];  ?><?php  echo "</td>";
    echo "<td id='email'>";?><?php echo $row['email'];  ?><?php  echo"</td>";
   
    echo "<td id='dob'>";?><?php echo $row['dob'];  ?><?php echo "</td>";
    echo "<td id='father_name'>";?><?php echo $row['father_name'];  ?><?php  echo "</td>";
    echo "<td id='mother_name'>";?><?php echo $row['mother_name'];  ?><?php  echo "</td>";
    echo "<td id='blood'>";?><?php echo $row['blood_group'];  ?><?php  echo "</td>";
    echo "<td id='yoa'>";?><?php echo $row['year_of_admission'];  ?><?php  echo "</td>";
    echo "<td id='branch'>";?><?php echo $row['course_name'];  ?><?php  echo "</td>";
    echo "<td id='semester'>";?><?php echo $row['current_semester'];  ?><?php echo "</td>";
    echo "<td>";?><?php echo "<a data-toggle='tooltip' title='update' id='update' onclick='update();' class='uil-edit'>
    <a  data-toggle='tooltip' title='delete' id='delete' onclick='delete_records();' class='uil-trash-alt'>";?><?php echo "</td>";
    echo "</tr>";?><?php
    


     endwhile;echo "</tbody>";
     echo "</table>";
    }





    exit();
}








}else{

    echo "Records not deleted..Something went wrong!".$query;
    exit();
}


}

}else{

echo $email.$id;
exit();

}

?>

