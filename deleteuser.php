<?php

include "functions.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from users where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    if($row['user_type']=='user'){
    header("location:userlist.php"); // redirects to all records page
    exit;
}else{
    header("location:userlist.php");
}	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>