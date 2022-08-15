<?php 
include('functions.php');

if (!isOrganiser()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

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
$time = $_POST['time'];
$description = $_POST['description'];
$venue = $_POST['venue'];
$address = $_POST['address'];
$price = $_POST['price'];
$contact_person = $_POST['contact_person'];
$contact_email = $_POST['contact_email'];
$image=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$target);
 if($conn->connect_error){
  die("Connection failed : ".$conn->connect_error);
}
$user=$_SESSION['user']['username'];
$query1=mysqli_query($conn,"SELECT * FROM users WHERE username='$user'");
$row1=mysqli_fetch_assoc($query1);
$id1=$row1['id'];
$INSERT = "INSERT INTO venue (id,username,name,contact,time,description,venue,address,price,contact_person,contact_email,image) VALUES('$id','$user','$name','$contact','$time','$description','$venue','$address','$price','$contact_person','$contact_email','$image')";
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
    <div class="wrapper">
        <div class="sidebar">
            <h2>Event &nbsp Organiser</h2>
            <ul>
                <li><a href="ohome.php"><i class="fa fa-home"></i>&nbsp Add Venue</a></li>
                <li><a href="privacyform.php"><i class="fa fa-plus"></i>&nbsp Policy Form</a></li>
                <li><a href="Opolicy.php"><i class="fa fa-gift"></i>&nbsp Privacy Policy</a></li>
                <li><a href="request.php"><i class="fa fa-calendar" aria-hidden="true"></i></i>&nbsp Booking Request</a></li>
                <li><a href="oevent.php"><i class="fa fa-file-text"></i></i>&nbsp Events List</a></li>
                <li><a href="ovenue.php"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp My Venue</a></li>
            </ul>
            <div class="social_media" style="margin-top:-60px">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <form method="post" enctype="multipart/form-data">
        <div class="banner11">
              <div class="banner10">
                <h1>event<span>O</span></h1>
              </div>
              </div>
              <div class="edit">
              <h2 style="margin-top:40px;margin-left:-10px"><i class="fa fa-calendar-plus"></i>&nbsp Add Venue </h2>
              <div class="item">
                <p>Organiser's Name</p>
                <input type="text" name="name"/>
              </div>
              <div class="item">
                <p>Venue Name</p>
                <input type="text" name="venue"/>
              </div>
              <div class="item">
                <p>Venue Address</p>
                <input type="textarea" name="address" placeholder="Enter address" />
              </div>

              </script>
              <div class="item">
                <input type="hidden" name="id" />
              </div>
              <div class="item">
                <p>Time of Opening</p>
                <input type="time" name="time" />
              </div>
              <div class="item">
                <p>Venue Description</p>
                <textarea rows="3" name="description" ></textarea>
              </div></div>
              
              <div class="item2">
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
              </div>
              <div class="item">
                <p>Price per Hour</p>
                <input type="text" name="price"/>
              </div>
              <input type="hidden" name="size" value="1000000" />
              <div class="item">
                <p>Venue Images</p>
                <input type="file" name="image" multiple />
              </div>
              <div class="send">
              <button type="submit" name="send" value="send">Send</button>

              </div></div>
            </form>
       <style>
              form {
        display:flex;
        margin-top:5px;
        margin-left:300px;
      width: 67%;
      height:527px;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #a76e05; 
      }
      .banner10 {
      position: relative;
      width:350px;
      height: 490px;
      background-image: url("update.png");      
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner10 h1{
        color:  #ffffff;
        font: normal 36px 'Open Sans', cursive;
        font-size: 80px;
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
</body>
</html>