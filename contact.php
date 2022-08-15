<?php
include('functions.php');

$servername="localhost";
$username="root";
$password="";
$dbname="evento_signup";

$conn = new mysqli($servername,$username,$password,$dbname);

$id=$_POST['id'];
$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_phone = $_POST['c_phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

 if($conn->connect_error){
  die("Connection failed : ".$conn->connect_error);
}
$user=$_SESSION['user']['username'];
$query1=mysqli_query($conn,"SELECT * FROM users WHERE username='$user'");
$row1=mysqli_fetch_assoc($query1);
$id1=$row1['id'];
$INSERT = "INSERT INTO contact_us(id,c_name, c_email, c_phone,subject,message) VALUES ('$id','$c_name','$c_email','$c_phone','$subject','$message')";

if ($conn->query($INSERT)) {
  mysqli_close($db); // Close connection
        header("location:index.php"); // redirects to all records page
        exit;
} else {
  echo "Error: " . $INSERT . "<br>" . $conn->error;
}
 
?>