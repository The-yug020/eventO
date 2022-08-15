<?php
include('functions.php');

$servername="localhost";
$username="root";
$password="";
$dbname="evento_signup";

$conn = new mysqli($servername,$username,$password,$dbname);
if(isset($_POST['send'])){
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
$INSERT = "INSERT INTO evento_event (id,user_id,name,contact,date,time,description,venue,address,capacity,event_type,set_time,contact_person,image,poster) VALUES('$id','$id1','$name','$contact','$date','$time','$description','$venue','$address','$capacity','$event_type','$set_time','$contact_person','$image','$file')";

if ($conn->query($INSERT)) {
  mysqli_close($db); // Close connection
        header("location:home.php"); // redirects to all records page
        exit;
} else {
  echo "Error: " . $INSERT . "<br>" . $conn->error;
}
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="eventO-main.css">
    <link rel="stylesheet" href="eventO-WelcomePage.css">
    <link rel="stylesheet" href="events.css">
    <link rel="php" href="login.php">
    <title>eventO-MainPage</title>
</head>
<body>
    <div class="banner">
        <header>
        <div class="navbar">
        <img src="eventO-logo.png" class="logo">
            <img src="eventO (1) (1).png" class="logo-1" style="margin-left:400px">
            <?php  if (isset($_SESSION['user'])) : ?>
					<strong style="color:#fff; margin-left:175px"><?php echo $_SESSION['user']['username']; ?></strong>
                    <?php endif ?>
						<a href="index.php?logout='1'"><button>Logout</button></a>
        </div>
        <div class="navbar2">
               <marquee behavior="" direction="">Welcome TO eventO &nbsp !  !&nbsp &nbsp &nbsp &nbsp Add Your 
                   Events &nbsp &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp Manage Your Events  &nbsp  &nbsp  &nbsp
                   &nbsp | &nbsp &nbsp &nbsp &nbsp Make Your Event Amazing And Successfull .&nbsp .&nbsp .  

                </marquee>
            
        </div>
    </header>
    </div>
       <div class="main_content">
        <div class="testbox">
        <form method="post" enctype="multipart/form-data">
             <div class="banner11">
              <div class="banner10">
                <h1>event<span>O</span></h1>
              </div>
              </div>
              <div class="edit">
              <h2 style="margin-bottom:rgb(255, 187, 0)"><i class="bi bi-calendar-plus"></i>&nbsp Add Event </h2>
              <div class="item">
                <p>Promoter's Name</p>
                <input type="text" name="name"/>
              </div>
              <div class="item">
                <p>Event Name</p>
                <input type="text" name="event_type"/>
              </div>
              <div class="item">
                <p>Date of Event</p>
                <input type="hidden" name="id" />
                <input type="date" name="date" />
                <i class="fas fa-calendar-alt"></i>
              </div>
              <div class="item">
                <p>Time of Event</p>
                <input type="time" name="time" />
                <i class="fas fa-clock"></i>
              </div>
              <div class="item">
                <p>Description of Event</p>
                <textarea rows="3" name="description" ></textarea>
              </div></div>
              
              <div class="item2">
              <div class="item">
                <p>Venue Name</p>
                <input type="text" name="venue"/>
              </div>
              <div class="item">
                <p>Venue Address</p>
                <input type="textarea" name="address" placeholder="Enter address" />
              </div>
                <input type="hidden" name="capacity"/>
                <input type="hidden" name="attendance"/>
                <input type="hidden" name="set_time"/>
              <div class="item">
                <p>Contact Person</p>
                <div class="name-item">
                  <input type="text" name="contact_person" placeholder="First  Last"/>
                </div>
              </div>
              <div class="item">
                <p>Contact Email</p>
                <input type="text" name="contact_email"/>
              </div>
              <div class="item">
                <p>Contact Number</p>
                <input type="text" name="contact"/>
              </div></div>
              <div class="item3">
              <input type="hidden" name="size" value="1000000" />
              <div class="item">
                <p>Event Image</p>
                <input type="file" name="image"/>
              </div>
              <div class="item">
                <p>Event Poster</p>
                <input type="file" name="poster"/>
              </div>
              
                    <input type="hidden" value="none" id="radio_1" name="record" />
                   <input type="hidden" value="none" id="radio_2" name="record" />
        
                  
              <div class="send">
              <button type="submit" name="send" value="send">Send</button>
              </div>
              </div>
            </form>
       <style>
              form {
        display:flex;
        margin-top:-2px;
        margin-left:20px;
      width: 97%;
      height:520px;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #a76e05; 
      }
      .banner10 {
      position: relative;
      width:450px;
      height: 480px;
      background-image: url("update.png");      
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner10 h1{
        color:  #ffffff;
        font: normal 36px 'Open Sans', cursive;
        font-size: 100px;
    }
    
    .banner10 h1 span{
        font: normal 50px 'Open Sans', cursive;
        color:  rgb(255, 153, 0);
        font-size: 130px;
    }
    
      .banner10::after {
      content: "";
      background-color: rgba(0, 0, 0, 0); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      .edit{
          margin-top:-20px;
          margin-left:40px;
          width:300px;
          height: 510px;
      }
      .edit2{
          margin-top:55px;
          margin-left:50px;
          width:300px;
          height: 510px;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #a76e05;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #a76e05;
      color: #a76e05;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item2 {
      position: relative;
      margin: 55px 0;
      width: 250px;
      }
      .item3 {
      position: relative;
      margin: 55px 0;
      }
      .item3 .send{
        margin:0 20%;
      }
            </style>
          </div>
       </div>
    </div>
</body>
</html>