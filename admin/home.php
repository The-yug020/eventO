<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../eventO-main.css">
    <link rel="stylesheet" href="../eventO-WelcomePage.css">
    <link rel="stylesheet" href="../logo-1.css">
</head>
<body>
<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h4 style="background-color: rgb(220, 255, 181);
    color: rgb(64, 138, 4);
    font-weight: lighter;font-align:250px;">
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h4>
			</div>
		<?php endif ?>
<div class="banner">
        <header>
        <div class="navbar">
        <img src="../eventO-logo.png" class="logo">
            <img src="../eventO (1) (1).png" class="logo-1" style="margin-left:550px">
                    <a href="../index.php?logout='1'" style="margin-left:320px"><button>Logout</button></a>
      
            
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
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../admin/profile.jpeg" style=" margin-left:10px;border-radius:50px; width:50px; height:50px"  >
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="font-size:25px"><div class="admin" style="margin-top:-55px; margin-left:62px;"><?php echo $_SESSION['user']['username']; ?></div></strong>
					<small>
						<i  style="color: #888;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
					</small>
        
			<div>
				<?php endif ?>
			</div>
		</div>
            <ul>
                <li><a href="../adminlist.php"><i class="fa fa-user"></i>&nbsp Manage Admin</a></li>
                <li><a href="create_user.php"><i class="fa fa-plus-circle"></i>&nbsp Add User</a></li>
                <li><a href="../userlist.php"><i class="fa fa-users" aria-hidden="true"></i>&nbsp Users List</a></li>
                <li><a href="../eventO-events_admin.php"><i class="fa fa-gift"></i>&nbsp Add Events</a></li>
                <li><a href="../adminvenue.php"><i class="fa fa-file-text"></i></i>&nbsp Event Details</a></li>
                <li><a href="../index.php?logout='1'"><i class="fa fa-sign-out"></i>&nbsp Logout</a></li>
            </ul>
            <div class="social_media" style="margin-top:-60px">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
       <div class="main_content">
           <div class="info" style="width:1500px;position:fixed">
           <div class="main1"> <button style="background-color:#f1a008;height:60px;width:60px;margin-left:1015px;margin-top:480px;border-radius:50%"><a href="../query.php"><i class="fa fa-comments-o" aria-hidden="true"
            style="color:#000;font-size:25px;"></i></a></button></div>
           <style>
               .info .main1{
                   margin-top:-10px;
                   margin-left:80px;
                    width: 1000px;
                    height: 555px;
                    background-image: url('../Main1.png');
                    background-size: cover;
                    background-position: center;
               }
           </style>
           </div>
       </div>
</body>
</html>