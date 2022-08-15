<?php

include('functions.php'); // Using database connection file here

$id = $_SESSION['user']['username']; // get id through query string

$query = mysqli_query($db,"select `username`, `email` from users where username='$id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

if(isset($_POST['update1'])) // when click on Update button
{
    $name = $_POST['username'];
    $contact = $_POST['email'];
	
    $edit = mysqli_query($db,"UPDATE users SET username='$name',email='$contact' where username='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:update_setting.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
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
    <title>Update Info</title>
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
        <div class="testbox" >
            <form method="post" style="width:60%;height:505px">
              <div class="banner11">
              <div class="banner10">
                <h1>event<span>O</span></h1>
              </div></div>
              <div class="banner12"><h2><i class="fa fa-cogs"></i> Setting</h2>
             
              
              <div class="item">
                <p>Update Username</p>
                <input type="hidden" name="id"/>
                <input type="text" name="username" value="<?php echo $row['username'] ?>"/>
              </div>
              <div class="item">
                <p>Update E-mail</p>
                <input type="email" name="email" value="<?php echo $row['email'] ?>"/>
                </div>
              <div class="send">
              <input type="submit" name="update1" value="Update">
              </div>
              <div class="send">
              <button style="width:120px;margin-left:225px;margin-top:50px"><a href="dashboard.php" style="color:#fff">Back</a></button>
              </div></div>
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
