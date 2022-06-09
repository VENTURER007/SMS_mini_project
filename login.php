<?php


include ('db.php');
// check if the submit button is not click
if (!isset($_POST['login'])) {
	// Redirect to login page and display error message
	header("location: index.php?mg=invalid");
	// Stop the script from running
	exit();
}else{
				
	// Escpace the accepting data
	$email 		= mysqli_real_escape_string($conn, $_POST['email']);
	$password 	= mysqli_real_escape_string($conn, $_POST['password']);

	// Check if either one of the receiving information is empty
	
	if (empty($email) || empty($password)) {
		// Redirect to login page and display error message
	header("location: index.php?mg=empty");
	// Stop the script from running
	exit();
	}else {
			// check if the email is valid
			
			
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				// Redirect to login page and display error message
				header("location: index.php?mg=invalidMail");
				// Stop the script from running
				exit();
			}else {
					$sql="SELECT * FROM users WHERE email=?;";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("location: index.php?mg=error");
						exit();
					}else{
						mysqli_stmt_bind_param($stmt, "s", $email);
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);

						// while($row=mysqli_fetch_assoc($result)){
						// 	echo $row['password'];
						// }

					
					
						
					}


				
				
					
					
				}
					
					// Check if there is account with thesame details
					if ($result->num_rows > 0) {
						
						
						// if yes fetch the entire information
						while($row = mysqli_fetch_assoc($result)) {
							$uID	 		= $row['id'];
							$username 		= $row['name'];
							$useremail 		= $row['email'];
							$userpassword	= $row['password'];
						}

						
						

					

						// Authenticate the user password
						// Comparing the user input and the database password
						$verifyPassword = password_verify($password, $userpassword);

						// Check if the password Does not match
						if ($verifyPassword === FALSE) {
							// Redirect to login page and display error message
							header("location: index.php?mg=passwordInvalid");
							// Stop the script from running
							exit();
						}

						// Else check if password if correct
						// If both found correctly
						elseif($verifyPassword === TRUE){
							// Start session
							session_start();
							// set some session information
							$_SESSION['user_id'] 	= $uID; 
							$_SESSION['loginName'] 	= $username; 
							$_SESSION['loginEmail'] = $useremail; 
							$_SESSION['role']		= "user"; 
							// You can more based on your project 
							
							// Redirect to home page 
							
							header("location: /student_dashboard/student_dashboard.php");

						}	

						// else return error if something goes wrong with the password verification
							else {
								// Redirect to login page and display error message
								header("location: index.php?mg=noAccount");
								// Stop the script from running
								exit();
								}
					}
					// If there is no account with such details
					else {
						// Redirect to login page and display error message
						header("location: index.php?mg=noAccount");
						// Stop the script from running
						exit();
					}
				}

			}

		


// close connections
mysqli_stmt_close($stmt);
mysql_close($conn);