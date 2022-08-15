<?php
include('functions.php');
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
    <link rel="stylesheet" href="logo-1.css">
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
    <div class="wrapper">
        <div class="sidebar">
            <h2>Event Management</h2>
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i>&nbsp Home</a></li>
                <li><a href="eventO-events.php"><i class="fa fa-gift"></i>&nbsp Add Events</a></li>
                <li><a href="myevents.php"><i class="fa fa-calendar" aria-hidden="true"></i></i>&nbsp My Events</a></li>
                <li><a href="venue.php"><i class="fa fa-file-text"></i></i>&nbsp Events List</a></li>
                
                <li><a href="mybooking.php"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp My Bookings</a></li>
                <li><a href="update_setting.php"><i class="fa fa-cogs"></i>&nbsp Setting</a></li>
            </ul>
            <div class="social_media" style="margin-top:-60px">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
       <div class="main_content">
           <div class="info">
               <img width="1166" height="538" src="Main1.png" alt="">
           </div>
       </div>
    </div>
</body>
</html>