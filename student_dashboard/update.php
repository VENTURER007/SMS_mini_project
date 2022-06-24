<?php           
                session_start();    
                include "/home/venturer/SMS_mini_project/db.php";
                
                 if(isset($_POST['email'])&&isset($_POST['dob'])&&isset($_POST['father'])&&isset($_POST['mother'])&&isset($_POST['blood'])){

                    $dob=$_POST['dob'];
                    $email=$_POST['email'];
                    $father=$_POST['father'];
                    $mother=$_POST['mother'];
                    $blood=$_POST['blood'];
                    
                    echo "personal details updated".$dob.$email.$father.$mother.$blood;
                    exit();
                 }

                 if(isset($_POST['branch'])&&isset($_POST['yoa'])&&isset($_POST['semester'])){

                    $branch=$_POST['branch'];
                    $yoa=$_POST['yoa'];
                    $semester=$_POST['semester'];
                    
                 
                    echo "personal details updated".$branch.$yoa.$semester;
                    exit();
                 }

?>                 