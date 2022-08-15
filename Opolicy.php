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
$query=mysqli_query($conn,"SELECT * FROM pp WHERE username='$user'");
$row=mysqli_fetch_assoc($query);
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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Privacy Policy</title>
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
    <div class="privacypolicy" style="margin-left:20px;font-stretch: semi-expanded">
    <div class="heading" display="flex">
    <p style="font-weight:600px;font-size:40px">PRIVACY POLICY</p><hr style="margin-top:-15px;margin-left:310px"></div>
    <div class="sub" style="margin-top:25px">
    <p style="font-weight:600px;font-size:20px">Your privacy is critically important to us.</p></div>
    <div class="bo" style="margin-top:25px">
        <p><?php echo $row['venue'] ?> is located at:</p>
        <p><?php echo $row['address'] ?><br><?php echo $row['contact'] ?></p>
    </div>
    <div class="bo" style="margin-top:25px">
        <p>It is <?php echo $row['venue'] ?>'s policy to respect your privacy regarding any information we may collect while operating our
         website. This Privacy Policy applies to arbathall.com (hereinafter, "us", "we", or "arbathall.com"). We respect your privacy and are 
         committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy
          policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what
           circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through
            the Website and does not apply to our collection of information from other sources.

This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use
 of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>
            </div>
 <div class="heading" display="flex">
 <p style="font-weight:600px;font-size:30px;margin-top:20px">WEBSITE VISITORS</p></div>
 <div class="bo" style="margin-top:25px">
        <p>Like most website operators, <?php echo $row['venue'] ?> collects non-personally-identifying information of the sort that web browsers and
             servers typically make available, such as the browser type, language preference, referring site, and the date and time of each 
             visitor request. <?php echo $row['venue'] ?>'s purpose in collecting non-personally identifying information is to better understand how 
             <?php echo $row['venue'] ?>'s visitors use its website. From time to time, <?php echo $row['venue'] ?> may release non-personally-identifying 
             information in the aggregate, e.g., by publishing a report on trends in the usage of its website.

<?php echo $row['venue'] ?> also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and 
for users leaving comments on https://www.<?php echo $row['venue'] ?>.com blog posts. <?php echo $row['venue'] ?> only discloses logged in user and commenter IP addresses 
    under the same circumstances that it uses and discloses personally-identifying information as described below.</p></div>
    <div class="heading" display="flex">
 <p style="font-weight:600px;font-size:30px;margin-top:20px">GATHERING OF PERSONALLY-IDENTIFYING INFORMATION</p></div>
 <div class="bo" style="margin-top:25px">
        <p>Certain visitors to <?php echo $row['venue'] ?>'s websites choose to interact with <?php echo $row['venue'] ?>in ways that require
        <?php echo $row['venue'] ?> to gather personally-identifying information. The amount and type of information that <?php echo $row['venue'] ?>gathers depends on the
        nature of the interaction. For example, we ask visitors who sign up for a blog at https://wwww.<?php echo $row['venue'] ?>.com to provide a
                 username and email address.</p></div>

                 <div class="heading" display="flex">
 <p style="font-weight:600px;font-size:30px;margin-top:20px">SECURITY</p></div>
 <div class="bo" style="margin-top:25px">
        <p>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or 
            method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal 
            Information, we cannot guarantee its absolute security.</p></div>

            <div class="heading" display="flex">
 <p style="font-weight:600px;font-size:30px;margin-top:20px">ADVERTISEMENTS</p></div>
 <div class="bo" style="margin-top:25px">
        <p>Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad 
            server to recognize your computer each time they send you an online advertisement to compile information about you or others who
             use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe
              will be of most interest to you. This Privacy Policy covers the use of cookies by <?php echo $row['venue'] ?> and does not cover the use
               of cookies by any advertisers.</p></div>

               <div class="heading" display="flex">
 <p style="font-weight:600px;font-size:30px;margin-top:20px">COOKIES</p></div>
 <div class="bo" style="margin-top:25px">
        <p>To enrich and perfect your online experience, <?php echo $row['venue'] ?> uses "Cookies", similar technologies and services provided by
             others to display personalized content, appropriate advertising and store your preferences on your computer.

A cookie is a string of information that a website stores on a visitor's computer, and that the visitor's browser provides to the website
 each time the visitor returns. <?php echo $row['venue'] ?> uses cookies to help <?php echo $row['venue'] ?> identify and track visitors, their
  usage of http://<?php echo $row['venue'] ?>.com, and their website access preferences. <?php echo $row['venue'] ?> visitors who do not wish 
  to have cookies placed on their computers should set their browsers to refuse cookies before using <?php echo $row['venue'] ?>'s websites,
   with the drawback that certain features
    of <?php echo $row['venue'] ?>'s websites may not function properly without the aid of cookies.

By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to <?php echo $row['venue'] ?>'s
 use of cookies.</p></div>

 <div class="heading" display="flex">
 <p style="font-weight:600px;font-size:30px;margin-top:20px">PRIVACY POLICY CHANGES</p></div>
 <div class="bo" style="margin-top:25px">
        <p>Although most changes are likely to be minor, <?php echo $row['venue'] ?> may change its Privacy Policy from time to time, and in
             <?php echo $row['venue'] ?>'s sole discretion. <?php echo $row['venue'] ?> encourages visitors to frequently check this page for any changes
              to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance
               of such change.</p></div>

               <div class="heading" display="flex">
 <p style="font-weight:600px;font-size:30px;margin-top:20px">CONTACT INFORMATION</p></div>
 <div class="bo" style="margin-top:25px">
        <p>If you have any questions about this Privacy Policy, please contact us via <a href="#"><?php echo $row['contact_email'] ?></a> or 
        <a href="#">+91 <?php echo $row['contact'] ?></a>.</p></div>

        <div class="heading" display="flex">
 <p style="font-weight:600px;font-size:30px;margin-top:20px">CASHBACK POLICY</p></div>
 <div class="bo" style="margin-top:25px">
        <p>Cancellation before 30 days : <?php echo $row['cb1'] ?> % cashback</p>
        <p>Cancellation before 15 days : <?php echo $row['cb2'] ?> % cashback</p>
        <p>Cancellation before 02 days : <?php echo $row['cb3'] ?> % cashback</p></div>
    </div>
    </div>
    <footer class="footer-distributed" style="margin-top:20px">

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