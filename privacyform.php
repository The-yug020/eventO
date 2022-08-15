<?php 
include('functions.php');


$servername="localhost";
$username="root";
$password="";
$dbname="evento_signup";

$conn = new mysqli($servername,$username,$password,$dbname);
$user=$_SESSION['user']['username'];
$query=mysqli_query($conn,"SELECT * FROM venue WHERE username='$user'");
$row=mysqli_fetch_assoc($query);

if(isset($_POST['send'])){
    $id=$_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $time = $_POST['time'];
    $description = $_POST['description'];
    $venue = $_POST['venue'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $contact_person = $_POST['contact_person'];
    $contact_email = $_POST['contact_email'];
    $cb1= $_POST['cb1'];
    $cb2= $_POST['cb2'];
    $cb3= $_POST['cb3'];
    
    $query1=mysqli_query($conn,"SELECT * FROM users WHERE username='$user'");
    $row1=mysqli_fetch_assoc($query1);
    $id1=$row1['id'];
    $INSERT = "INSERT INTO pp (id,username,name,contact,time,description,venue,address,price,contact_person,contact_email,cb1,cb2,cb3)
     VALUES('$id','$username','$name','$contact','$time','$description','$venue','$address','$price','$contact_person','$contact_email','$cb1','$cb2','$cb3')";
    if ($conn->query($INSERT)) {
      mysqli_close($db); // Close connection
            header("location:ohome.php"); // redirects to all records page
            exit;
    } else {
      echo "Error: " . $INSERT . "<br>" . $conn->error;
    }
}
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
    <div class="form">
        <form method="post" enctype="multipart/form-data">
              <div class="edit">
              <div class="item">
                <h2>Cashback on Cancellation</h2>
                <div class="cancel" style="display:flex">
                <p style="margin-top:20px">Before 30 Days :
                <input type="text" name="cb1" style="margin-left:10px;margin-top:20px"/> %</p></div>
                <div class="cancel" style="display:flex">
                <p style="margin-top:10px">Before 15 Days :
                <input type="text" name="cb2" style="margin-left:10px;margin-top:10px"/> %</p></div>
                <div class="cancel" style="display:flex">
                <p style="margin-top:10px">Before 2 Days :
                <input type="text" name="cb3" style="margin-left:10px;margin-top:10px;margin-bottom:40px"/> %</p></div>
              </div>
             
              <div class="item">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                <input type="hidden" name="username" value="<?php echo $row['username'] ?>" />
                <input type="hidden" name="name" value="<?php echo $row['name'] ?>" />
                <input type="hidden" name="contact" value="<?php echo $row['contact'] ?>" />
                <input type="hidden" name="time" value="<?php echo $row['time'] ?>" />
                <input type="hidden" name="description" value="<?php echo $row['description'] ?>" />
                <input type="hidden" name="venue" value="<?php echo $row['venue'] ?>" />
                <input type="hidden" name="address" value="<?php echo $row['address'] ?>" />
                <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                <input type="hidden" name="contact_person" value="<?php echo $row['contact_person'] ?>" />
                <input type="hidden" name="contact_email" value="<?php echo $row['contact_email'] ?>" />
              </div>
             
              <div class="send">
              <button type="submit" name="send" value="send">Send</button>

              </div></div>
        </form>
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