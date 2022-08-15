<?php
include('functions.php');

$query = mysqli_query($db,"SELECT password from users where username='".$_SESSION['user']['username']."'"); // select query

$row = mysqli_fetch_assoc($query); // fetch data
$p=$_POST['currentPassword'];
$np=$_POST['newPassword'];
$cp=$_POST['confirmPassword'];

$edit = mysqli_query($db,"UPDATE users SET password='".$np."' where username='".$_SESSION['user']['username']."'");
if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:dashboard.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    } 

?>