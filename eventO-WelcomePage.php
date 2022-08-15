<?php
include('functions.php')
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="eventO-WelcomePage.css">
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
    <title>eventO-Welcome</title>
</head>
<body>
    <div class="banner">
        <header>
        <div class="navbar">
            <img src="eventO-logo.png" class="logo">
            <img src="eventO (1) (1).png" class="logo-1">
            <a href="index.php?logout='1'"><button>Logout</button></a>
        </div>
        <div class="navbar2">
            <ul>
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
        <div class="table" style="background-image: url(https://www.pixelstalk.net/wp-content/uploads/2016/08/Dark-spots-texture-background-1920x1080-620x349.jpg);">
        <table border="1" style= "background-color: #fff; color: black; margin: 0 auto;" >
        <br>
        <tr style="background-color:#000; color:rgb(255, 145, 0);">
    <th>Organizer Name</th>
    <th>Event Description</th>
    <th>Date</th>
    <th>Time</th>
    <th>Venue</th>
    <th>Event Type</th>
    <th>Contact Person</th>
    <th>Contact No.</th>
    <th>Event Poster</th>
    </tr>
    <?php
 $INSERT="SELECT * FROM evento_event";
 while($row=mysqli_fetch_assoc($result))
 {
  ?>
        <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['time'] ?></td>
        <td><?php echo $row['venue'] ?></td>
        <td><?php echo $row['event_type'] ?></td>
        <td><?php echo $row['contact_person'] ?></td>
        <td><?php echo $row['contact'] ?></td>
        <td><a href="uploads/<?php echo $row['poster'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    <br><br>
    </div>
        <div id="about" class="about">
            <div class="navbar4">
                <h3>About Us</h3>
            </div>
            <h2>Join Over active users that power their events with eventO !!</h2>
            <img width="1000" src="eventO_main2.png" alt="">
        </div>
        
 <div id="contact" class="container">
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
                     <input id="txt_name" type="text" Required="required">
                     <p>Email *</p>
                     <input id="txt_email" type="text" Required="required">
                     <p>Phone *</p>
                     <input id="txt_phone" type="text" Required="required">
                     <p>Subject *</p>
                     <input id="txt_subject" type="text" Required="required">
                     <p>Message *</p>
                     <textarea id="txt_message" rows="4" cols="20" Required="required" ></textarea>
                     <input type="submit" id="btn_send" value="SEND">
            </div>
        </div>
    </div>
</div>
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