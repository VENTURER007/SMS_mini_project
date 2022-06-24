<?php
session_start();    
include "/home/venturer/SMS_mini_project/db.php";

if (isset($_POST['update'])) {
	// Escape the accepting Data's
	$fullName 		= mysqli_real_escape_string($conn, $_POST['name']);
	$email 			= mysqli_real_escape_string($conn, $_POST['email']);
	
	$father_name 	= mysqli_real_escape_string($conn, $_POST['father_name']);
	$mother_name	= mysqli_real_escape_string($conn, $_POST['mother_name']);
	$dob			= mysqli_real_escape_string($conn, $_POST['dob']);
	$blood			= mysqli_real_escape_string($conn, $_POST['blood']);
	$yoa			= mysqli_real_escape_string($conn, $_POST['yoa']);
	$branch 		= mysqli_real_escape_string($conn, $_POST['branch']);
	$semester		= mysqli_real_escape_string($conn, $_POST['semester']);
    $email1=$_SESSION['index'];



	if (empty($fullName) || empty($email)  || empty($father_name) || empty($mother_name) || empty($dob) || empty($blood) || empty($yoa) || empty($branch) || empty($semester)) {
		// If one found empty redirect user back to the signup page
		header("location: index.php?mg=empty");
		exit();
	}else{
	


$query = "update users set name='$fullName',email='$email',father_name='$father_name',mother_name='$mother_name',dob='$dob',blood_group='$blood',year_of_admission='$yoa',course_name='$branch',current_semester='$semester' where email='$email1'";
$stmt = mysqli_stmt_init($conn);




// Check if the request is ready to be use
if (!mysqli_stmt_prepare($stmt, $query)) {
    // If not ready display error and redirect user to previous page
    header("location: index.php?mg=sqlError"); 
    exit();
}else {

    
    // Replace the question mark with the appropriate information
    $result = mysqli_stmt_execute($stmt);
// $result=mysqli_query($stmt,$query);

   // Check if request run successfully
   if ($result=== TRUE) {
									
    // If the query run successfully redirect the user to login page and display success message
    header("location: admin_dashboard.php?mg=updateSuccess");
    exit();
}else {
    
    // If something goes wrong and it fails to run the query redirect the user to previous page and display error message
    header("location: index.php?mg=error");
    
    exit();
}
}

	}
}
?>