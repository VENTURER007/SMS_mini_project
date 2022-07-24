<?php
session_start();    
include "/home/venturer/SMS_mini_project/db.php";

if (isset($_POST['update'])) {
	// Escape the accepting Data's
	$fullName 		= mysqli_real_escape_string($conn, $_POST['name']);
	$email 			= mysqli_real_escape_string($conn, $_POST['email']);
	$father_name 	= mysqli_real_escape_string($conn, $_POST['father']);
	$mother_name	= mysqli_real_escape_string($conn, $_POST['mother']);
	$dob			= mysqli_real_escape_string($conn, $_POST['dob']);
	$blood			= mysqli_real_escape_string($conn, $_POST['blood']);
	$yoa			= mysqli_real_escape_string($conn, $_POST['yoa']);
	$branch 		= mysqli_real_escape_string($conn, $_POST['branch1']);
	$semester		= mysqli_real_escape_string($conn, $_POST['semester1']);
	$gender		= mysqli_real_escape_string($conn, $_POST['gender']);
	$mobile		= mysqli_real_escape_string($conn, $_POST['mobile']);
	$address		= mysqli_real_escape_string($conn, $_POST['address']);
    $email1=$_SESSION['index'];

	// echo $fullName."\n".$email."\n".$father_name."\n".$mother_name."\n".$dob."\n".$blood."\n".$yoa."\n".$branch."\n".$semester."\n".$address."\n".$mobile."\n".$gender;
	// exit();

	if (empty($fullName) || empty($email)  || empty($father_name) || empty($mother_name) || empty($dob) || empty($blood) || empty($yoa) || empty($branch) || empty($semester) || empty($gender) || empty($mobile) || empty($address)){
		// If one found empty redirect user back to the signup page
		header("location: index.php?mg=empty");
		exit();
	}else{
	


$query = "update users set name='$fullName',email='$email',father_name='$father_name',mother_name='$mother_name',dob='$dob',blood_group='$blood',year_of_admission='$yoa',course_name='$branch',current_semester='$semester', mobile_no='$mobile', gender='$gender', address='$address'  where email='$email1'";
$stmt = mysqli_stmt_init($conn);




// Check if the request is ready to be use
if (!mysqli_stmt_prepare($stmt, $query)) {
    // If not ready display error and redirect user to previous page
    echo("sqlError"); 
    exit();
}else {

    
    // Replace the question mark with the appropriate information
    $result = mysqli_stmt_execute($stmt);
// $result=mysqli_query($stmt,$query);

   // Check if request run successfully
   if ($result=== TRUE) {
									
    // If the query run successfully redirect the user to login page and display success message
    
	include('ajax.php');
    exit();
}else {
    
    // If something goes wrong and it fails to run the query redirect the user to previous page and display error message
    echo("error");
    
    exit();
}
}

	}
}
?>