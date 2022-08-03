<?php

session_start();

// Include the database configuration file
        include '/home/venturer/SMS_mini_project/db.php';

        $id=$_POST['id']; echo $id;       
        
// Get images from the database
        $query = $conn->query("SELECT image_name,cert_name FROM users WHERE id = '$id'");
        
         if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = '/images/'.$row["image_name"];
                $certURL = '/plustwo_cert/'.$row["cert_name"];
                // $_SESSION['profile_image'] = $imageURL;


        ?>
           <div class="container"> <h1>Documents</h1><label for="image_name">Profile photo</label><img style="
    margin-left: 90px;
" id="image_name" class=" " width="65"  src="<?php echo $imageURL; ?>" alt="photo" /><input  type="file" id="img1" name="img" accept="image/*"><br><br>
            <label for="cert_name">Qualification certificate</label><img id="cert_name" class="img-fluid" src="<?php echo $certURL;?>" alt="cert" ><input  type="file" id="doc1" name="doc" accept="image/*">
            <button id="update_button" value="submit" onclick="doc_update_upload();" class="button hvr-radial-out hvr-grow-shadow" >Upload</button></div>           
        <?php }
        }else
        { ?>
            <p>No image(s) found...</p>
        <?php } 
?>