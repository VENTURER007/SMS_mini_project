<?php



session_start();
$_SESSION['user'] = "none";
session_unset();
session_destroy();

header("location:/../index.php?mg=logout");

?>