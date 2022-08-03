<?php
session_start();    
include "/home/venturer/SMS_mini_project/db.php";

$request = file_get_contents("php://input");


unset($marks);
unset($ids);
$marks=json_decode($request)->ce_marks;
$ids=json_decode($request)->id;

// foreach($marks as $mark){
//     echo "marks\n".$mark;
//        }
   
   
//        foreach($ids as $id){
//            echo "id\n".$id;
//               }    
   
//      echo "\nsubject_id".$_SESSION['subject_id'];
//      echo "\nexam_id".$_SESSION['exam_id'];  
//      echo "\n".sizeof($marks);  
//      echo "\n".sizeof($ids);  


// foreach($marks as $mark){
//  echo $mark;
//     }

// foreach($ids as $id){
//         echo $id;
//         echo $mark;
//            }

 $n=sizeof($marks);
 
$subject_id = $_SESSION['subject_id'];         
           
if(isset($marks)&&isset($_SESSION['subject_id'])&&isset($ids)&&(sizeof($marks)==sizeof($ids))){

           for($i=0; $i<$n; $i++ ){
           // Creating the template for inserting details


							$sql = "INSERT INTO `ce_marks` (student_id, ce_marks, subject_id) VALUES(?, ? , ?)";
							
							$stmt = mysqli_stmt_init($conn);
							

						
							// Check if the request is ready to be use
							if (!mysqli_stmt_prepare($stmt, $sql)) {
								// If not ready display error and redirect user to previous page
								header("location: index.php?mg=sqlError");
								exit();
							}else {

								
								// Replace the question mark with the appropriate information
                                  $id_param=$ids[$i];
                                  $marks_param=$marks[$i]; 
                                //   echo $id_param.'<br>';
                                //   echo $marks_param.'<br>';
                                //   exit(); 

                                  

								mysqli_stmt_bind_param($stmt, "sss", $id_param, $marks_param , $subject_id  );
							
								$result = mysqli_stmt_execute($stmt);
							
								
								
								
							}
		
		

                        }  // Check if request run successfully
                        if ($result === TRUE) {
                            
                            // If the query run successfully redirect the user to login page and display success message
                            echo "
                    <div class='success-respond'>
                        <p>CE marks updated successfully!</p>
                    </div>
                ";

                            $result=NULL;
                            unset($marks);
                            unset($ids);
                            unset($request);
                            
                        }else {
                            
                            // If something goes wrong and it fails to run the query redirect the user to previous page and display error message
                            echo("error");
                            $result=NULL;
                            exit();
                        }
                                    

                    }else{
                        echo "something went wrong";
                        unset($marks);
                            unset($ids);
                            unset($request);
                    }
?>