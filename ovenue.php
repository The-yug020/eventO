<?php 
include('functions.php');


$servername="localhost";
$username="root";
$password="";
$dbname="evento_signup";

$conn = new mysqli($servername,$username,$password,$dbname);
$user=$_SESSION['user']['username'];
$query1=mysqli_query($conn,"SELECT * FROM users WHERE username='$user'");
$row1=mysqli_fetch_assoc($query1);
$id1=$row1['id'];
$query=mysqli_query($conn,"SELECT * FROM venue WHERE username='$user'");
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="eventO-main.css">
    <link rel="stylesheet" href="eventO-WelcomePage.css">
    <link rel="stylesheet" href="logo-1.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h4 style="background-color: rgb(220, 255, 181);color: rgb(64, 138, 4);font-weight: lighter;font-align:250px;">
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
            <img src="eventO-logo.png" class="logo">
            <img src="eventO (1) (1).png" class="logo-1" style="margin-left:29%">
            <?php  if (isset($_SESSION['user'])) : ?>
					<strong style="color:#fff; margin-left:175px"><?php echo $_SESSION['user']['username']; ?><small>
						<i  style="color: #888;font-size:15px">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
					</small></strong>
                    <?php endif ?>
						<a href="index.php?logout='1'"><button>Logout</button></a>
        </div>
        <div class="navbar2">
        <marquee behavior="" direction="" style="color: #ffe082">Welcome TO eventO &nbsp !  !&nbsp &nbsp &nbsp &nbsp Add Your Venue &nbsp &nbsp 
        &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp Add Your Events &nbsp &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp Manage Your Events  &nbsp  &nbsp
          &nbsp &nbsp | &nbsp &nbsp &nbsp &nbsp Make Your Event Amazing And Successfull .&nbsp .&nbsp .  

                </marquee>
        </div>
    </header>
    </div>
    <div class="show_venue" style="display:flex">
    <div class="show_image" style="width:500px">
    <?php echo "<img src='img/".$row['image']." '>";?></div>
    <div style="margin-left:20px;margin-top:10px;width:500px">
    <h2 class="title" style="font-size:26px">Venue : <?php echo $row['venue'] ?></h2><br>
    <h4 class="title" style="font-size:20px">Organizer : <?php echo $row['name'] ?></h4>
    <h4 class="title" style="font-size:20px">Address : <?php echo $row['address'] ?></h4><br>
    <h4 class="title" style="font-size:20px">Description : <?php echo $row['description'] ?></h4><br>
    <h4 class="title" style="font-size:20px">Time of Opening : <?php echo $row['time'] ?></h4><br>
    <h4 class="title" style="font-size:20px">Price : Rs. <?php echo $row['price'] ?>/Hr</h4>
    <br>
    <div class="contact" style="display:flex">
    <h4 class="title" style="font-size:14px">Contact Person : <br><?php echo $row['contact_person'] ?></h4>
    <h4 class="title" style="font-size:14px;margin-left:50px">E-mail : <br> <?php echo $row['contact_email'] ?></h4>
    <h4 class="title" style="font-size:14px;margin-left:50px">Mo. : <br> <?php echo $row['contact']?></h4>
            </div>
    </div>
            <style type="text/css">
              .show_image img{
                  margin-top:10px;
                  margin-bottom:-6px;
                  margin-left:10px;
                  width:480px;
                  height: 520px;
              }
            </style>
    </div>
    
</body>
</html>