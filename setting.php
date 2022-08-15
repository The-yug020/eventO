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
    <link rel="stylesheet" href="events.css">
    <link rel="stylesheet" href="eventO-WelcomePage.css">
    <link rel="stylesheet" href="logo-1.css">
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
       <div class="main_content" >
        <div class="testbox">
            <form action="password_change.php" method="post" style="width:70%;height:495px">
              <div class="banner11">
              <div class="banner10">
                <h1>event<span>O</span></h1>
              </div></div>
              <div class="banner12"><h2><i class="fa fa-cogs"></i> Setting</h2>
             
              <div class="item">
                <p>Update sername</p>
                <input type="hidden" name="id" />
                <input type="text" name="newname"/><span id="currentPassword" class="required"></span>
              </div>
              <div class="item">
                <p>Update E-mail</p>
                <input type="email" name="newemail"/><span id="newPassword" class="required"></span>
              </div>
              <div class="btn-block">
                <button type="submit" name="submit">SAVE</button>
              </div></div>
            </form>
            <style>
              form{
                display:flex;
              }
              .banner10{
                height:447px;
                background-image: url("update.png");
              }
              .banner11{
                width:55%;
              }
              .banner12{
                margin-left:40px;
                width:60%;
              }
            </style>
          </div>
       </div>
    </div>
</body>
</html>