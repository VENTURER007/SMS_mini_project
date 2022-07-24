<?php

include('db.php');
$as= "select * from ac where 1";
if(!mysqli_query($conn,$as));
{
echo "error".mysqli_error($conn);
    echo $as;

}

echo"runing successfully";

?>