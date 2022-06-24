<?php

session_start();    
include "/home/venturer/SMS_mini_project/db.php";

 if(isset($_POST['subject'])&&isset($_POST['exam'])){

    $_SESSION['subject']=$_POST['subject'];
    $_SESSION['exam']=$_POST['exam'];
    $subject=$_SESSION['subject'];
    $exam=$_SESSION['exam'];
    
    
 


 // Creating the template for inserting details
 $sql = "INSERT INTO `subject_table` (subject_name) VALUES(?)";
 $sql1 = "INSERT INTO `exam_table` (exam_name) VALUES(?)";
 $conn1=$conn;							
 $stmt = mysqli_stmt_init($conn);
 $stmt1 = mysqli_stmt_init($conn1);
 

// check if something goes wrong with the connection
if ($conn1->connect_error) {
	die("
		<center>
			<h2>Connection Failure:".$conn1->connect_error."</h2>
		</center><?php
		include('db.php');
		
		
		?>
	");
}
 


 // Check if the request is ready to be use
 if (!(mysqli_stmt_prepare($stmt, $sql)&&mysqli_stmt_prepare($stmt1, $sql1))) {
     // If not ready display error and redirect user to previous page
     header("location: index.php?mg=sqlError");
     exit();
 }else {

     
     // Replace the question mark with the appropriate information
     mysqli_stmt_bind_param($stmt, "s", $subject );
     mysqli_stmt_bind_param($stmt1, "s", $exam );
 
     $result = mysqli_stmt_execute($stmt);
     $last_subject_id = mysqli_insert_id($conn);
     $result1 = mysqli_stmt_execute($stmt1);
     $last_exam_id = mysqli_insert_id($conn1);
 
     
     
     // Check if request run successfully
     if ($result === TRUE&&$result1 === TRUE) {
         
         // If the query run successfully redirect the user to login page and display success message
         echo "
         <div class='success-respond'>
             <p>Subject & Exam added successfully!</p>
         </div>
     ";
         
         

         
         $_SESSION['subject_id'] = $last_subject_id;
         $_SESSION['exam_id'] = $last_exam_id;
         exit();
     }else {
         
         // If something goes wrong and it fails to run the query redirect the user to previous page and display error message
         echo("subject not added!");
         
         exit();
     }
 }


 }

 

 ?>