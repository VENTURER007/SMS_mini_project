<?php

session_start();    
include "/home/venturer/SMS_mini_project/db.php";

 if(isset($_POST['id'])){
    echo "<h4 style='margin-left: 11px;'>Continous evaluvation marks</h4> ";
    $id=$_POST['id']; 

    $sql="SELECT * FROM ce_marks WHERE student_id=?;";
    
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
							$ce_marks[]	 		= $row['ce_marks'];
							$subject_id[] 		= $row['subject_id'];
							$student_id 		= $row['student_id'];
							
					    }

                        $n=sizeof($ce_marks);
                        $k=sizeof($subject_id);
                        // print_r($ce_marks);
                        // print_r($subject_id);
                        // exit();

                        if($n==$k){
                        echo "<table class='fl-table' border='1'><thead><tr><th>Subject name</th><th>Mark</th></tr></thead><tbody>";
                        for($i=0;$i<$n;$i++){

                        $sql1="SELECT subject_name FROM subject_table WHERE subject_id=?;";

                        $stmt = mysqli_stmt_init($conn);

                        if (!mysqli_stmt_prepare($stmt, $sql1)) {
                            echo("error 2");
                            exit();
                        }else{

                            

                            mysqli_stmt_bind_param($stmt, "s", $subject_id[$i]);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            // while($row=mysqli_fetch_assoc($result)){
                            // 	echo $row['password'];
                            // } 
                            // Check if there is account with thesame details
                        if ($result->num_rows > 0) {
                            
                            
                            // if yes fetch the entire information
                            while($row = mysqli_fetch_assoc($result)) {
                               
                                $subject_name		= $row['subject_name'];
                                echo '<tr><td>'.$subject_name.'</td>';
                                
                                
                            }
                            echo '<td>'.$ce_marks[$i].'</td></tr>';
                            }
                        
                        
                        }          
                        }echo "<tbody></table>";
                    }
    
                        
    

 


                    
}




 }
?>
    
    