<?php           
                session_start();    
                include "/home/venturer/SMS_mini_project/db.php";
                $user_id=$_SESSION['user_id'];
                 if(isset($_POST['email'])&&isset($_POST['dob'])&&isset($_POST['father'])&&isset($_POST['mother'])&&isset($_POST['blood'])){
                 
                    $name=$_POST['name'];
                    $dob=$_POST['dob'];
                    $email=$_POST['email'];
                    $father=$_POST['father'];
                    $mother=$_POST['mother'];
                    $blood=$_POST['blood'];
                    $mobile=$_POST['mobile'];
                    $gender=$_POST['gender'];
                    $address=$_POST['address'];
                    
                    
                  //   echo "personal details updated".$dob.$email.$father.$mother.$blood.$mobile.$gender.$address;
                  //   exit();
                    
                     // Check if email is valid
                     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        // If email seems to be invalid redirect the user back to the homepage
                        echo("invalidMail");
                        exit();
                     }else {
                        // Check if there is user exist with thesame email in the database using prepare statement
                        $check = "SELECT email FROM `users` WHERE `email` = ?;";
                        $checkStmt = mysqli_stmt_init($conn);
                        // Check if the request is ready
                        if (!mysqli_stmt_prepare($checkStmt, $check)) {
                           // If it is not ready redirect the user back to previous page
                           echo("sqlError");
                           exit();
                        }else {
                           mysqli_stmt_bind_param($checkStmt, "s", $email);
                           mysqli_stmt_execute($checkStmt);
                           mysqli_stmt_store_result($checkStmt);
                           $resultCheck = mysqli_stmt_num_rows($checkStmt);
                           // Check if there is any rows with the email
                           if ($resultCheck > 1) {
                              // if found redirect user back
                              echo("dublicateEmail");
                              exit();
                           }else{
                           
                           
                            
         
         
                              if(isset($_POST["update"])){
            
         
                              
                  
                           // Insert image file name into database
                                     //   $insert = $conn->query("INSERT into users (image_name) VALUES ('$fileName')");
                  
                                      //  if($insert){
                                      //      $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
         
                                   //     }else{
                                   // 					           $statusMsg = "File upload failed, please try again.";
                                 // 		exit();
                                   //     } 
                  
                 // Start inserting the user details in the database
         
                              // hashed the user's password to the latest security
                              $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                              
                              // Get Current date and time information in India
                              date_default_timezone_set("Asia/Bangkok");
                              $currentDate = date("d-m-Y");
                              $currentTime = date('h:i:s A');
         
                              
                                     
         
                              // Creating the template for inserting details
                              // $sql = "UPDATE `users` SET  name = ?, email = ?, password = ?, reg_date = ?, reg_time = ?, dob = ?, father_name = ?, mother_name = ?, blood_group = ?, mobile_no = ?, gender = ?, address = ? WHERE id = ?";

                              $sql1 = "update users set `name`= ? ,`email`= ? ,`father_name`= ? ,`mother_name`= ? ,`dob`= ? ,`blood_group`= ? , `mobile_no`= ? , `gender`= ? , `address`= ?   where `id`= ? ";

                              $stmt = mysqli_stmt_init($conn);
                              
         
                           
                              // Check if the request is ready to be use
                              if (!mysqli_stmt_prepare($stmt, $sql1)) {
                                 // If not ready display error and redirect user to previous page
                                 echo("sqlError");
                                 exit();
                              }else {
         
                                 
                                 // Replace the question mark with the appropriate information
                                 mysqli_stmt_bind_param($stmt, "ssssssssss", $name, $email, $father, $mother ,$dob, $blood, $mobile, $gender, $address , $user_id);
                              
                                 $result = mysqli_stmt_execute($stmt);
                              
                                 
                                 
                                 // Check if request run successfully
                                 if ($result === TRUE) {
                                    
                                    // If the query run successfully redirect the user to login page and display success message
                                 echo("Updation sucessfully!");
                                 $_SESSION['loginName'] 	= $name; 
							$_SESSION['loginEmail'] = $email; 
							$_SESSION['dob'] 		= $dob;
							$_SESSION['father'] 	= $father; 
							$_SESSION['mother'] 	= $mother; 
							$_SESSION['blood'] 		= $blood; 
							$_SESSION['mobile'] 	= $mobile;
							$_SESSION['address'] 	= $address;
							$_SESSION['gender'] 	= $gender;
                                    exit();
                                 }else {
                                    
                                    // If something goes wrong and it fails to run the query redirect the user to previous page and display error message
                                    echo("error");
                                    
                                    exit();
                                 }
                              }
               
               
               
               
               
               
               
               
               
               
               
              
         }
         
         
         
         
         
         
         
         
         
         
                              
                           }
                        }
                     }
                  }
                    
                 

                 if(isset($_POST['branch'])&&isset($_POST['yoa'])&&isset($_POST['semester'])){

                    $branch=$_POST['branch'];
                    $yoa=$_POST['yoa'];
                    $semester=$_POST['semester'];
                    
                 
                  //   echo "academic details updated".$branch.$yoa.$semester;
                    $sql = "update users set `year_of_admission`= ? ,`current_semester`= ? ,`course_name`= ? where `id`= ? ";

                              $stmt = mysqli_stmt_init($conn);
                              
         
                           
                              // Check if the request is ready to be use
                              if (!mysqli_stmt_prepare($stmt, $sql)) {
                                 // If not ready display error and redirect user to previous page
                                 echo("sqlError");
                                 exit();
                              }else {
         
                                 
                                 // Replace the question mark with the appropriate information
                                 mysqli_stmt_bind_param($stmt, "ssss", $yoa, $semester, $branch, $user_id);
                              
                                 $result1 = mysqli_stmt_execute($stmt);
                              
                                 
                                 
                                 // Check if request run successfully
                                 if ($result1 === TRUE) {
                                    
                                    // If the query run successfully redirect the user to login page and display success message
                                 echo("Updation sucessfully!");
                                 
                                 $_SESSION['yoa'] 		= $yoa; 
                                 $_SESSION['course'] 	= $branch; 
                                 $_SESSION['semester'] 	= $semester;
                                    exit();
                                 }else {
                                    
                                    // If something goes wrong and it fails to run the query redirect the user to previous page and display error message
                                    echo("error");
                                    
                                    exit();
                                 }
                              }
                    exit();
                 }

?>                 