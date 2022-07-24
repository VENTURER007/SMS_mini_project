<?php

session_start();    
include "/home/venturer/SMS_mini_project/db.php";

 if(isset($_POST['id'])){
    echo "<h4 style='margin-left: 11px;'>Exam results</h4> ";
    $id=$_POST['id']; 

    $sql="SELECT * FROM results_table WHERE student_id=?;";
    
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo("error1");
						exit();
					}else{
						mysqli_stmt_bind_param($stmt, "s", $id);
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);

						// while($row=mysqli_fetch_assoc($result)){
						// 	echo $row['password'];
						// }

					
					
						
					}

					
					// Check if there is account with thesame details
					if ($result->num_rows > 0) {
						
						
						// if yes fetch the entire information
						while($row = mysqli_fetch_assoc($result)) {
							$marks[]	 		= $row['mark'];
							$subject_id[] 		= $row['subject_id'];
							$student_id 		= $row['student_id'];
                            $exam_id[]          = $row['exam_id'];
							
					    }

                        $n=sizeof($marks);
                        $k=sizeof($subject_id);
                        // print_r($marks);
                        // print_r($subject_id);
                        // print_r($exam_id);
                        $conn2 = new mysqli($serverName, $serverUser, $serverPass, $serverDB);
                        if ($conn2->connect_error) {
                            die("
                                <center>
                                    <h2>Connection Failure:".$conn->connect_error."</h2>
                                </center><?php
                                include('db.php');
                                
                                
                                ?>
                            ");
                        }
                        // exit();

                        if($n==$k){
                        echo "<table class='fl-table' border='1'><thead><tr><th>Exam name</th><th>Subject name</th><th>Marks</th></tr></thead><tbody>";  
                        for($i=0;$i<$n;$i++){
                            
                        $sql1="SELECT subject_name FROM subject_table WHERE subject_id=?;";
                        $sql2="SELECT exam_name FROM exam_table WHERE exam_id=$exam_id[$i];";

                        $stmt = mysqli_stmt_init($conn);
                        
                        // $stmt2 = mysqli_stmt_init($conn2);

                        if (!mysqli_stmt_prepare($stmt, $sql1)) {
                            echo("error 2");
                            exit();
                        }else{

                           
                            

                            mysqli_stmt_bind_param($stmt, "s", $subject_id[$i]);
                           
                            mysqli_stmt_execute($stmt);
                            
                            if($result2 = $conn2 -> query($sql2)){

                                if (($result2->num_rows > 0) ) {
                                        
                                       
                                         // if yes fetch the entire information
                                        while($row2 = mysqli_fetch_assoc($result2)){
                                           
                                            $exam_name		= $row2['exam_name'];
                                            echo '<tr><td>'.$exam_name.'</td>';
                                            
                                            
                                        }
                                        // echo '<td>'.$exam_id[$i].'</td></tr>';
                                           
        
                                
                                
                                
                                    }


                            }
                            // mysqli_stmt_execute($stmt2);
                            $result = mysqli_stmt_get_result($stmt);
                            
                            // while($row=mysqli_fetch_assoc($result)){
                            // 	echo $row['password'];
                            // } 
                            // Check if there is account with thesame details
                            if (($result->num_rows > 0)) {
                                
                                
                                // if yes fetch the entire information
                                while($row = mysqli_fetch_assoc($result)) {
                                   
                                    $subject_name		= $row['subject_name'];
                                    echo '<td>'.$subject_name.'</td>';
                                    
                                    
                                }
                                echo '<td>'.$marks[$i].'</td></tr>';
                                
    
                               
                                
                                
                                    // if yes fetch the entire information
                                    // while($row2 = mysqli_fetch_assoc($result2)) {
                                       
                                    //     $exam_name		= $row2['exam_name'];
                                    //     echo '<td>'.$exam_name.'</td></tr>';
                                        
                                        
                                    // }
                                    // echo '<td>'.$exam_id[$i].'</td></tr>';
                                       
    
                            
                            
                            
                                }else{
                                echo"something went wrong";
                                
                            }
                        }          
                        }
                    }echo "<tbody></table>";
    
                        
    

 


                    
}




 }
?>
    
    