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
							$mobile			= $row['mobile_no'];
							$address		= $row['address'];
							$gender			= $row['gender'];
							
						}

					
?>


            <div class="form" id="form" >
            
            <label for="name" class="input__label"> Name</label><input id="name"type="text" name="name" class="form__input" value = "<?php echo $username;?>"><br>
            <label for="email" class="input__label">Email</label><input id="email"type="text" name="email" class="form__input" value = "<?php echo $useremail;?>"><br>
            <label for="dob" class="input__label">Date of birth</label><input id="dob"type="text" name="dob" class="form__input" value = "<?php echo $dob;?>"><br>
			<div class="input_field radio_option">
            <label for="gender" class="input__label">Gender</label> <br> 
            <input type="Radio" name='g' value="male" id="rd1" <?php if($gender=="male"){ echo "checked";} ?>>
              <label for="rd1">Male</label>
              <input type="Radio" name='g' value="female" id="rd2"  <?php if($gender=="female"){ echo "checked";} ?>>
              <label for="rd2">Female</label>
              </div><br>
			<label for="blood" class="input__label"> Blood group </label><input id="blood"type="text" name="blood" class="form__input" value = "<?php echo $blood;?>"><br>
			<label for="mobile" class="input__label"> Mobile </label><input id="mobile"type="text" name="mobile" class="form__input" value = "<?php echo $mobile;?>"><br>
            <label for="father" class="input__label"> Father name</label><input id="father"type="text" name="father_name" class="form__input" value = "<?php echo $father;?>"><br>
            <label for="mother" class="input__label"> Mother name</label><input id="mother"type="text" name="mother_name" class="form__input" value = "<?php echo $mother;?>"><br>
			<label for="address" class="input__label"> Address </label><input id="address"type="text" name="address" class="form__input" value = "<?php echo $address;?>"><br>
			
            
            <label for="yoa" class="input__label"> Year of Admission</label><input id="yoa"type="text" name="yoa" class="form__input" value = "<?php echo $yoa;?>"><br>
            <label for="branch1" class="input__label"> Branch</label><input id="branch1"type="text" name="branch1" class="form__input" value = "<?php echo $course;?>"><br>
            <label for="semester1" class="input__label"> Semester</label><input id="semester1"type="text" name="semester1" class="form__input" value = "<?php echo $semester;?>"><br>
            <input type="submit" onclick="srUpdate();" id="button" class="button" name="update" value="update">
			</div>

		<?php }else{ 
		
		echo "sql error";
		exit();
		
		
		} ?>