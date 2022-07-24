<?php
session_start();
include "/home/venturer/SMS_mini_project/db.php";

$id=$_POST['id'];

if(isset($id)){



// $query = "delete from users where email=$email";
$query = "DELETE FROM `users` WHERE `users`.`id` = $id;";

$stmt = mysqli_stmt_init($conn);
// $result = mysqli_query($conn, $query);

// Check if the request is ready to be use
if (!mysqli_stmt_prepare($stmt, $query)) {
    // If not ready display error and redirect user to previous page
    echo("sqlError");
    exit();
}else {

    
    // Replace the question mark with the appropriate information
    $result = mysqli_stmt_execute($stmt);
// $result=mysqli_query($stmt,$query);

if($result === TRUE){

    header("location:ajax.php");

}else{

    echo "Records not deleted..Something went wrong!".$query;
    exit();
}


}

}else{

echo $email.$id;
exit();

}

?>

