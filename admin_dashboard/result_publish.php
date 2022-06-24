<?php
session_start();    
include "/home/venturer/SMS_mini_project/db.php";

$request = file_get_contents("php://input");



$marks=json_decode($request)->marks;
$ids=json_decode($request)->id;


// foreach($marks as $mark){
//  echo $mark;
//     }

// foreach($ids as $id){
//         echo $id;
//         echo $mark;
//            }

 $n=sizeof($marks);
 
$subject_id = $_SESSION['subject_id'];   
$exam_id = $_SESSION['exam_id'];   
   
           
if(isset($exam_id)&&isset($marks)&&isset($_SESSION['subject_id'])&&isset($ids)&&(sizeof($marks)==sizeof($ids))){

           for($i=0; $i<$n; $i++ ){
           // Creating the template for inserting details


							$sql = "INSERT INTO `results_table` (subject_id, mark, student_id, exam_id) VALUES(?, ? , ? ,?)";
							
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

                                  
                                // echo 'student_id'.$id_param.'<br>'; 
                                // echo 'mark'.$marks_param.'<br>';
                                // echo 'subject_id'.$subject_id.'<br>';
                                // echo 'exam_id'.$exam_id.'<br>';
                                
                                
                                
								mysqli_stmt_bind_param($stmt, "ssss",  $subject_id, $marks[$i] , $ids[$i], $exam_id  );
							
								$result = mysqli_stmt_execute($stmt);
                                // echo 'result_id:'.mysqli_insert_id($conn).'<br>';
                                

                         
                                
                                
							
								
								
								
							}
		
		

                        }         // Check if request run successfully
                        if ($result === TRUE) {
                            
                            // If the query run successfully redirect the user to login page and display success message
                            echo "
                    <div class='success-respond'>
                        <p>CE marks updated successfully!</p>
                    </div>
                ";
                
                          $result=null;  
                            
                        }else {
                            
                            // If something goes wrong and it fails to run the query redirect the user to previous page and display error message
                            echo("error");
                            echo("Error description: " . mysqli_error($conn));
                            // $result=NULL;
                            // exit();
                        }
                                    

                    }
?>