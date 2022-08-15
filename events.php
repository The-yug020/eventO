<?php
if(!isset($_SESSION)){
    session_start();
}
$servername="localhost";
$username="root";
$password="";
$dbname="evento_signup";

$conn = new mysqli($servername,$username,$password,$dbname);

$target="img/".basename($_FILES['image']['name']);
$id=$_POST['id'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$date = $_POST['date'];
$time = $_POST['time'];
$description = $_POST['description'];
$venue = $_POST['venue'];
$address = $_POST['address'];
$capacity = $_POST['capacity'];
$event_type = $_POST['event_type'];
$set_time = $_POST['set_time'];
$contact_person = $_POST['contact_person'];
$pay = $_POST['pay'];
$image=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$target);
$file = rand(1000,100000)."-".$_FILES['poster']['name'];
    $file_loc = $_FILES['poster']['tmp_name'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}
$user=$_SESSION['user']['username'];
$query1=mysqli_query($conn,"SELECT * FROM users WHERE username='$user'");
$row1=mysqli_fetch_assoc($query1);
$id1=$row1['id'];
    $SELECT="SELECT * From evento_event Where name = ? ";
    $INSERT="INSERT  Into evento_event (id,user_id,name,contact,date,time,description,venue,address,capacity,event_type,set_time,contact_person,image,poster,pay) values(?,$id1,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->bind_result($id,$id1,$name,$contact,$date,$time,$description,$venue,$address,$capacity,$event_type,$set_time,$contact_person,$image,$file,$pay);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssssssssssssss",$id,$name,$contact,$date,$time,$description,$venue,$address,$capacity,$event_type,$set_time,$contact_person,$image,$file,$pay);
        $stmt->execute();
        include("dashboard.php");
?>