<?php

session_start();    
include "/home/venturer/SMS_mini_project/db.php";

 if(isset($_POST['subject'])){

    $_SESSION['subject']=$_POST['subject'];
    $subject=$_SESSION['subject'];
    
    
 


 // Creating the template for inserting details
 $sql = "INSERT INTO `subject_table` (subject_name) VALUES(?)";
							
 $stmt = mysqli_stmt_init($conn);
 


 // Check if the request is ready to be use
 if (!mysqli_stmt_prepare($stmt, $sql)) {
     // If not ready display error and redirect user to previous page
     header("location: index.php?mg=sqlError");
     exit();
 }else {

     
     // Replace the question mark with the appropriate information
     mysqli_stmt_bind_param($stmt, "s", $subject );
 
     $result = mysqli_stmt_execute($stmt);
 
     
     
     // Check if request run successfully
     if ($result === TRUE) {
         
         // If the query run successfully redirect the user to login page and display success message
         echo "
         <div class='success-respond'>
             <p>Subject added successfully!</p>
         </div>
     ";
         $last_id = mysqli_insert_id($conn);
         
         $_SESSION['subject_id'] = $last_id;
         exit();
     }else {
         
         // If something goes wrong and it fails to run the query redirect the user to previous page and display error message
         echo("subject not added!");
         
         exit();
     }
 }


 }

 

 ?>