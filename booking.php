<?php
include('functions.php');
require ('config.php');

$servername="localhost";
$username="root";
$password="";
$dbname="evento_signup";

$conn = new mysqli($servername,$username,$password,$dbname);
if(isset($_POST['book'])){
$event = $_POST['event'];
$pay = $_POST['pay'];
$id2=$_POST['id2'];
$name = $_POST['name'];
$contact = $_POST['p_no'];
$date = $_POST['nom'];
$date1 = $_POST['date'];
$email = $_POST['email'];
 if($conn->connect_error){
  die("Connection failed : ".$conn->connect_error);
}
$user=$_SESSION['user']['username'];
$query1=mysqli_query($conn,"SELECT * FROM users WHERE username='$user'");
$row1=mysqli_fetch_assoc($query1);
$id1=$row1['id'];
$INSERT = "INSERT INTO book (id,event,name,p_no,nom,pay,date,email) VALUES('$id1','$event','$name','$contact','$date','$pay','$date1','$email')";

if ($conn->query($INSERT)) {
  $now=date('Y-m-d');
  $date2=$date1;
  $diff= strtotime($date2)-strtotime($now);
  $left=round($diff/86400);

  $to_email = "$email";
$subject = "$event";
$message = "$left Days left for $event...";
$headers = 'From: evento.remibder@gmail.com';
if(mail($to_email,$subject,$message,$headers)){
  echo "Email Successfully sent to $to_email";
}
header("location:index1.php");
} else {
  echo "Error: " . $INSERT . "<br>" . $conn->error;
}
 
}
?>
