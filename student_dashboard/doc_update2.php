<?php
session_start();
include "/home/venturer/SMS_mini_project/db.php";

if (isset($_POST['update'])) {
$image			= mysqli_real_escape_string($conn, $_POST['img']);
$plustwo_cert			= mysqli_real_escape_string($conn, $_POST['plustwo_cert']);
$id = $_SESSION['user_id'];
//file uploading

$statusMsg = '';
$statusMsg2 = '';
// echo $image;
// echo $plustwo_cert;

// File upload path
$targetDir = "/home/venturer/SMS_mini_project/images/";
$targetDir2 = "/home/venturer/SMS_mini_project/plustwo_cert/";
    $fileName = basename($_FILES["img"]["name"]);
    $fileName2 = basename($_FILES["plustwo_cert"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $targetFilePath2 = $targetDir2 . $fileName2;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
    

    // echo $fileName;
    // echo $_FILES["plustwo_cert"]["name"];
    //  exit();
    if(!empty($_FILES["img"]["name"]) && !empty($_FILES["plustwo_cert"]["name"])){

       

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');

    if(in_array($fileType, $allowTypes) && in_array($fileType2, $allowTypes)){
        
        // echo $fileName;
        // echo $fileName2;
        
        
// Upload file to server

        if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["plustwo_cert"]["tmp_name"], $targetFilePath2)){
           

$sql = "update users set `image_name`= ? ,`cert_name`= ?  where `id`= ? ";

                              $stmt = mysqli_stmt_init($conn);
                              
         
                           
                              // Check if the request is ready to be use
                              if (!mysqli_stmt_prepare($stmt, $sql)) {
                                 // If not ready display error and redirect user to previous page
                                 echo("sqlError");
                                 exit();
                              }else {
         
                                 
                                 // Replace the question mark with the appropriate information
                                 mysqli_stmt_bind_param($stmt, "sss", $fileName, $fileName2, $id);
                                
                                 $result1 = mysqli_stmt_execute($stmt);
                              
                                 
                                 
                                 // Check if request run successfully
                                 if ($result1 === TRUE) {
                                     
                                     echo "files uploaded successfully!";
                                 }
        }
    }else{

echo "files not stored....something went wrong";

    }
}else{
	// if the button is not clicked redirect the user back
	echo("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.");
}

    }
}else{
    echo "something went wrong";
}
// close all connections
mysqli_stmt_close($checkStmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>