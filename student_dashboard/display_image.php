<?php
session_start();

// Include the database configuration file
        include '/home/venturer/SMS_mini_project/db.php';


        $useremail=$_SESSION['loginEmail'];

        

// Get images from the database
        $query = $conn->query("SELECT image_name FROM users WHERE email = '$useremail'");
        
        // $sql1="SELECT image_name FROM users WHERE email=?;";
		// 			$stmt1 = mysqli_stmt_init($conn);
		// 			if (!mysqli_stmt_prepare($stmt, $sql)) {
		// 				header("location: index.php?mg=error");
		// 				exit();
		// 			}else{
		// 				mysqli_stmt_bind_param($stmt, "s", $email);
		// 				mysqli_stmt_execute($stmt);
		// 				$result = mysqli_stmt_get_result($stmt);

		// 				// while($row=mysqli_fetch_assoc($result)){
		// 				// 	echo $row['password'];
		// 				// }

					
					
						
		// 			}

        

         if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = '/images/'.$row["image_name"];
                $_SESSION['profile_image'] = $imageURL;


        ?>
            <img class="rounded-pill img-fluid" width="65"  src="<?php echo $imageURL; ?>" alt="" />
            
        <?php }
        }else
        { ?>
            <p>No image(s) found...</p>
        <?php } 
        
?>



