<?php

include('functions.php'); // Using database connection file here
require ('config.php');

$servername="localhost";
$username="root";
$password="";
$dbname="evento_signup";
$conn = new mysqli($servername,$username,$password,$dbname);
$id = $_GET['id']; // get id through query string

$user=$_SESSION['user']['username'];
$query1=mysqli_query($conn,"SELECT * FROM users WHERE username='$user'");
$row1=mysqli_fetch_assoc($query1);

$query = mysqli_query($db,"select * from evento_event where id='$id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update Info</title>
</head>
<body>

<form action="booking.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="event" value="<?php echo $row['event_type'] ?>" />
<input type="hidden" name="date" value="<?php echo $row['date'] ?>" />
<input type="hidden" name="email" value="<?php echo $row1['email'] ?>" />
<input type="hidden" name="pay" value="<?php echo $row['capacity'] ?>" />
             <div class="banner11">
              <div class="banner10">
              <div class="show_image" style="width:500px">
              <?php echo "<img src='img/".$row['image']." '>";?>
            </div>
            <style type="text/css">
              .show_image img{
                  margin-top:1px;
                  margin-bottom:-6px;
                  margin-left:1px;
                  width:450px;
                  height: 510px;
              }
        </style>
              </div>
              </div>
              <div class="subcontent col-md-6" style="border-top-right-radius:20px;border-bottom-right-radius:20px">
                <div class="cont" style="margin-left:55px;">
                <h1 class="hr1" ><?php echo $row['event_type'] ?></h1><br>
                <h4 class="title" style="font-size:20px">Organizer : <?php echo $row['name'] ?></h4>
                <p class="location" style="font-size:16px;font-weight:500">Date : 
                <?php echo $row['date'] ?>&nbsp &nbsp &nbsp  Time: <?php echo $row['time'] ?>
                </p><br>
                <p class="location" style="font-size:20px;font-weight:500"><b> Venue :</b>&nbsp 
                <?php echo $row['venue'] ?>
                </p>
                <p class="location" style="font-size:20px;font-weight:500"><b>Address :</b>&nbsp 
                <?php echo $row['address'] ?>
                </p><br>
                <p class="definition" style="font-size:16px;font-weight:300;margin-top:5px">
                <?php echo $row['description'] ?></p><br>
                <p class="contact_person" style="font-size:20px;font-weight:500"><b>Contact Person :</b>&nbsp 
                <?php echo $row['contact_person'] ?>
                </p>
                <p class="contact" style="font-size:20px;font-weight:500"><b>Mobile No. :</b>&nbsp 
                <?php echo $row['contact'] ?></p>
                <br>
                </div></div>
                <div class="form" style="dispay:flex;width:260px;margin-top:100px;margin-left:80px">
                <div class="item">
                <p>Full Name</p>
                <input type="text" name="name"/>
              </div>
              <div class="item">
                <p>Contact No.</p>
                <input type="text" name="p_no"/>
              </div>
              <div class="item">
                <p>Number of Members</p>
                <input type="hidden" name="id2" />
                <input type="text" name="nom"/>
                <hr style="margin-left:-10px;width:260px">
                <div class="book" style="display:flex">
                
                <button type="submit" name="book" value="book" class="btn btn-default btn-lg" style="color:#000;margin-left:60px;margin-top:20px;width:150px;margin-bottom:20px;border-radius:50px;background:rgb(255, 174, 0)">
                Next<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                </button></div>
                </div>
              </div>
                </div>
              
            </form>
            </body>
</html>
<style>
    form {
        display:flex;
        margin-top:30px;
        margin-left:80px;
      width: 90%;
      height:550px;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #a76e05; 
      }
      .banner10 {
      position: relative;
      width:450px;
      height: 510px;     
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
    
      .hr1{
   margin-bottom: 20px;
}
.hr1::before{
    content: '';
    position: absolute;
    z-index: 1;
}
.hr1::after{
    content: '';
    position: absolute;
    display: block;
    width: 350px;
    height: 4px;
    background: #fdaf06;
    z-index: 2;
    transform-origin: left;
    transform:scaleX(0);
    animation: animate 10s ease-in-out 0s infinite ;
}
      
</style>