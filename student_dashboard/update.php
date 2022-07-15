<?php           
                session_start();    
                include "/home/venturer/SMS_mini_project/db.php";
                
                 if(isset($_POST['email'])&&isset($_POST['dob'])&&isset($_POST['father'])&&isset($_POST['mother'])&&isset($_POST['blood'])){

                    $dob=$_POST['dob'];
                    $email=$_POST['email'];
                    $father=$_POST['father'];
                    $mother=$_POST['mother'];
                    $blood=$_POST['blood'];
                    $mobile=$_POST['mobile'];
                    $gender=$_POST['gender'];
                    $address=$_POST['address'];
                    
                    echo "personal details updated".$dob.$email.$father.$mother.$blood.$mobile.$gender.$address;
                    
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
                           if ($resultCheck > 0) {
                              // if found redirect user back
                              echo("dublicateEmail");
                              exit();
                           }else{
                           
                           
                              //file uploading
         
                           $statusMsg = '';
         
                        // File upload path
                        $targetDir = "images/";
                              $fileName = basename($_FILES["img"]["name"]);
                              $targetFilePath = $targetDir . $fileName;
                              $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
         
         
                              if(isset($_POST["signup"]) && !empty($_FILES["img"]["name"])){
            
         
                               // Allow certain file formats
                               $allowTypes = array('jpg','png','jpeg','gif','pdf');
         
                               if(in_array($fileType, $allowTypes)){
                       // Upload file to server
            
                                   if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)){
                  
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
                              $sql = "INSERT INTO `users` (name, email, password, reg_date, reg_time, dob, father_name, mother_name, blood_group, year_of_admission, course_name, current_semester, image_name) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                              
                              $stmt = mysqli_stmt_init($conn);
                              
         
                           
                              // Check if the request is ready to be use
                              if (!mysqli_stmt_prepare($stmt, $sql)) {
                                 // If not ready display error and redirect user to previous page
                                 header("location: index.php?mg=sqlError");
                                 exit();
                              }else {
         
                                 
                                 // Replace the question mark with the appropriate information
                                 mysqli_stmt_bind_param($stmt, "sssssssssssss", $fullName, $email, $hashedPassword, $currentDate, $currentTime, $dob, $father_name, $mother_name , $blood, $yoa, $branch, $semester, $fileName );
                              
                                 $result = mysqli_stmt_execute($stmt);
                              
                                 
                                 
                                 // Check if request run successfully
                                 if ($result === TRUE) {
                                    
                                    // If the query run successfully redirect the user to login page and display success message
                                    header("location: index.php?mg=signupSuccess");
                                    exit();
                                 }else {
                                    
                                    // If something goes wrong and it fails to run the query redirect the user to previous page and display error message
                                    header("location: index.php?mg=error");
                                    
                                    exit();
                                 }
                              }
               
               
               
               
               
               
               
               
               
               
               
               }else{
                     $statusMsg = "Sorry, there was an error uploading your file.";
                  echo $statusMsg;
                  exit();
                 }
             }else{
                 $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
               echo $statusMsg;
               exit();
             }
         }else{
             $statusMsg = 'Please select a file to upload.';
            echo $statusMsg;
            exit();
         }
         
         
         
         
         
         
         
         
         
         
                              
                           }
                        }
                     }
                  }
                    
                 

                 if(isset($_POST['branch'])&&isset($_POST['yoa'])&&isset($_POST['semester'])){

                    $branch=$_POST['branch'];
                    $yoa=$_POST['yoa'];
                    $semester=$_POST['semester'];
                    
                 
                    echo "academic details updated".$branch.$yoa.$semester;
                    exit();
                 }

?>                 