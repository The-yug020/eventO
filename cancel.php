<?php

include "functions.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"DELETE from book where id2 = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:mybooking.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>