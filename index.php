<?php 
    include('functions.php');
    if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

$servername="localhost";
     $username="root";
     $password="";
     $dbname="evento_signup";

      $connector = mysqli_connect($servername,$username,$password,$dbname)
          or die("Unable to connect");
        echo "";
      $selected = mysqli_select_db($connector,"evento_signup")
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysqli_query($connector,"SELECT * FROM evento_event ");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="eventO-WelcomePage.css">
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
            <img src="eventO-logo.png" class="logo">
            <img src="eventO (1) (1).png" class="logo-1" style="margin-left:400px">
            <?php  if (isset($_SESSION['user'])) : ?>
					<strong style="color:#fff; margin-left:175px"><?php echo $_SESSION['user']['username']; ?></strong>
                    <?php endif ?>
						<a href="index.php?logout='1'"><button>Logout</button></a>
        </div>
        <div class="navbar2">
            <ul style="margin-left:-250px">
            <li><a href="dashboard.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Dashboard</a></li>
            </ul>
            <ul style="margin-right:410px">
                <li><a href="#home"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="	fa fa-info-circle"></i> About Us</a></li>
                <li><a href="#contact"><i class="fa fa-phone"></i> Contact Us</a></li>
                <li><a href="Privacy_policy.html"><i class="	fa fa-pencil-square-o"></i> Privacy Policy</a></li>
            </ul>
        </div>
    </header>
    </div>
    <section>
        <div class="imgBx">
            <img src="eventO-welcome1.jpg" alt="">
        </div>
        <div id="home" class="home"></div>
        <div class="navbar3">
            <h3>Upcoming Events</h3>
        </div>

    <?php
 $INSERT="SELECT * FROM evento_event";
 while($row=mysqli_fetch_assoc($result))
 {
    if($row['date'] >= date('Y-m-d') && $row['status']=='approved'){
    ?>
    <div class="row">
    <section>
        <div class="container">
            <div class="date col-md-1"><div class="date1" style="font-size:25px;font-weight:700">Date:</div>
            <div class="date2"><?php echo $row['date'] ?></div></br></br>
            <div class="date1" style="font-size:25px;font-weight:700">Time:</div> <div class="date2"><span class="time"><?php echo $row['time'] ?></span></div>
            </div>
            <div class="show_image" style="width:500px">
            <?php echo "<img src='img/".$row['image']." '>";?>
            
            </div>
            <style type="text/css">
              .show_image img{
                  margin-top:1px;
                  margin-bottom:-6px;
                  margin-left:1px;
                  width:492px;
                  height: 320px;
              }
        </style>
            <div class="subcontent" style="border-top-right-radius:20px;border-bottom-right-radius:20px">
                <div class="cont" style="margin-left:20px;width:350px">
                <div class="he1"><h1><?php echo $row['event_type'] ?></h1></div><br>
                <style>
                    .he1 h1{
    color: #202f36;
    font-weight: 600;
    font-size: 1.4em;
    display: inline-block;
    letter-spacing: 1px;
}
                    .subcontent .cont .he1 h1{
                    margin-top: 7px;
                    }
                     .subcontent .cont .he1  h1::before{
                       content: '';
                       position: absolute;
                       z-index: 0;
                       }
                     .subcontent .cont .he1 h1::after{
                        content: '';
                        position: absolute;
                        display: block;
                        width: 25%;
                        height: 4px;
                        background: #fdaf06;
                        z-index: 2;
                        animation: animate 10s ease-in-out 0s infinite ;
                        }
                     @keyframes animate{
                           0%{
                             transform: translate(0) scaleX(0);
                             transform-origin: left;
                             }
                          20%,100%{
                             transform: translate(0) scaleX(1);
                             transform-origin: left;
                              }
                        }
                </style>
                <h4 class="title" style="font-size:16px">Organizer : <?php echo $row['name'] ?></h4>
                <p class="location" style="font-size:16px;font-weight:500">Venue : 
                <?php echo $row['venue'] ?>
                </p>
                <p class="definition" style="font-size:16px;font-weight:300;margin-top:5px">
                <?php echo $row['description'] ?></p>
                <p class="contact_person" style="font-size:16px;font-weight:500">Contact Person : 
                <?php echo $row['contact_person'] ?>
                </p>
                <p class="contact" style="font-size:16px;font-weight:500">Mobile No. : 
                <?php echo $row['contact'] ?></p>
                <br>
                <hr style="margin-left:-10px;width:375px">
                
                <button type="button" class="btn btn-default btn-lg" style="margin-left:120px;margin-top:20px;margin-bottom:20px;border-radius:50px;background:rgb(255, 174, 0)">
                <a href="uploads/<?php echo $row['poster'] ?>" target="_blank" style="font-decoration:none;color:#000;font-weight:600;font-size:17px">View File</a><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                </button></div>
                </div>
            </div>
    </section>
    <br>
    <hr>
</div>
<?php
 }
}
 ?>

    <br><br>
    </div>
        <div id="about" class="about">
            <div class="navbar4">
                <h3>About Us</h3>
            </div>
            <h2 style="margin-left:245px">Join Over active users that power their events with eventO !!</h2>
            <img width="1000" src="eventO_main2.png" alt="">
        </div>
<form action="contact.php" method="POST" style="width:1340px">
 <div id="contact" class="container" style="margin-top:-70px">
    <div class="contact-parent">
        <div class="contact-child child1">
            <p>
                     <i class="fas fa-map-marker-alt"></i> Address <br />
                     <span> Waghodia Road
                     <br />
                     Vadodara, Gujarat-390019</br>
                     India.
                     </span>
            </p>
            <p>
                     <i class="fas fa-phone-alt"></i> Let's Talk <br />
                     <span> +91 8469655400</span>
            </p>
            <p>
                     <i class=" far fa-envelope"></i> General Support <br />
                     <span>daveyug2002@gmail.com</span>
            </p>
        </div>
        <div class="contact-child child2">
            <div class="inside-contact">
                     <div class="hr1"><h2>Contact Us</h2></div>
                     <h3>
                        <span id="confirm">
                     </h3>
                     <p>Name *</p>
                     <input id="id" name="id" type="hidden">
                     <input id="c_name" name="c_name" type="text" Required="required">
                     <p>Email *</p>
                     <input id="c_email" name="c_email" type="text" Required="required">
                     <p>Phone *</p>
                     <input id="c_phone" name="c_phone" type="text" Required="required">
                     <p>Subject *</p>
                     <input id="subject" name="subject" type="text" Required="required">
                     <p>Message *</p>
                     <textarea id="message" name="message" rows="4" cols="20" Required="required" ></textarea>
                     <input type="submit" id="btn_send" value="SEND">
            </div>
        </div>
    </div>
</div>
</form>
    </section>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>event<span>O</span></h3>

				<p class="footer-links">
					<a href="#home" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#about">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#contact">Contact</a>
				</p>

				<p class="footer-company-name">Company Name © 2021</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Waghodia Road</span> Vadodara, Gujarat-390019 </br>India.</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 8469655400</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">daveyug2002@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					eventO is a event management system in which you can manage your events and make your events successfull !!
				</p>

				<div class="footer-icons">

					<a href="#"><li><img src="facebook.png"></li></a>
					<a href=""><li><img src="twitter.png"></li></a>
                    <a href=""><li><img src="linkedin.png"></li></a>
                    <a href=""><li><img src="instagram.png"></li></a>
                    

				</div>

			</div>

		</footer>
</body>
</html>