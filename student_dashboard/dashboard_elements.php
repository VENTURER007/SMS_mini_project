<?php
session_start();

// Include the database configuration file
        include '/home/venturer/SMS_mini_project/db.php';

        $useremail=$_SESSION['loginEmail'];        

// Get images from the database
        $query = $conn->query("SELECT image_name FROM users WHERE email = '$useremail'");
        
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



