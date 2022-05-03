
<?php

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password2=$_POST['password'];
$gender=$_POST["g"];
$branch=$_POST['branch'];

//branch validatioon

if(isset($_POST['submit'])){
  if(!empty($_POST['branch'])){
    $branch=$_POST['branch'];
    echo $branch.'is selected';
  }else{
    echo 'branch is not selected';
  }
}

//gender validation
if(isset($_POST['g']))
{
    $gender= $_POST['g'];
}
else
{
  $gender=female;
}

if(isset($_POST['branch']))
{
  $branch=$_POST['branch'];
}


define('DB_SERVER','127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','register');


$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME); 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO `students` (`first_name`, `last_name`, `email`, `password2`, `gender`, `branch`) VALUES ('$first_name', '$last_name','$email', '$password2','$gender','$branch');";
  
  if (mysqli_query($conn, $sql))
  {
    header("Location:login.php");
  } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);


?>
