<?php

$_SESSION['user'] = "none";

session_start();
session_unset();
session_destroy();

header("location:/../index.php?mg=logout");

?>