<?php 
session_start();
include "/home/venturer/SMS_mini_project/db.php";
$_SESSION['index']=$_POST['index'];

$email=$_SESSION['index'];

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

                    if ($result->num_rows > 0) {
						
						
						// if yes fetch the entire information
						while($row = mysqli_fetch_assoc($result)) {
							$uID	 		= $row['id'];
							$username 		= $row['name'];
							$useremail 		= $row['email'];
							
							$dob			= $row['dob'];
							$father			= $row['father_name'];
							$mother			= $row['mother_name'];
							$blood			= $row['blood_group'];
							$yoa			= $row['year_of_admission'];
							$course			= $row['course_name'];
							$semester		= $row['current_semester'];
							
						}

					
?>



            <form method="post" action="update_insert.php">
            <label for="email" class="input__label"> id</label><input id="email"type="text" name="id"  class="form__input" value = "<?php echo $uID;?>"><br>
            <label for="dob" class="input__label"> Name</label><input id="dob"type="text" name="name" class="form__input" value = "<?php echo $username;?>"><br>
            <label for="father" class="input__label">Email</label><input id="father"type="text" name="email" class="form__input" value = "<?php echo $useremail;?>"><br>
            <label for="mother" class="input__label">Date of birth</label><input id="mother"type="text" name="dob" class="form__input" value = "<?php echo $dob;?>"><br>
            <label for="blood" class="input__label"> Father name</label><input id="blood"type="text" name="father_name" class="form__input" value = "<?php echo $father;?>"><br>
            <label for="blood" class="input__label"> Mother name</label><input id="blood"type="text" name="mother_name" class="form__input" value = "<?php echo $mother;?>"><br>
            <label for="blood" class="input__label"> Blood group </label><input id="blood"type="text" name="blood" class="form__input" value = "<?php echo $blood;?>"><br>
            <label for="blood" class="input__label"> Year of Admission</label><input id="blood"type="text" name="yoa" class="form__input" value = "<?php echo $yoa;?>"><br>
            <label for="blood" class="input__label"> Branch</label><input id="blood"type="text" name="branch" class="form__input" value = "<?php echo $course;?>"><br>
            <label for="blood" class="input__label"> Semester</label><input id="blood"type="text" name="semester" class="form__input" value = "<?php echo $semester;?>"><br>
            <input type="submit" class="button" name="update" value="update">
			</form>

		<?php }else{ 
		
		echo "sql error";
		exit();
		
		
		} ?>