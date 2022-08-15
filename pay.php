<?php
include('functions.php');
?>
<?php
     $servername="localhost";
     $username="root";
     $password="";
     $dbname="evento_signup";

      $connector = mysqli_connect($servername,$username,$password,$dbname)
          or die("Unable to connect");
        echo "";
      $selected = mysqli_select_db($connector,"evento_signup")
        or die("Unable to connect");

        $user=$_SESSION['user']['username'];
        $query1=mysqli_query($connector,"SELECT * FROM users WHERE username='$user'");
        $row1=mysqli_fetch_assoc($query1);
        $query3=mysqli_query($connector,"SELECT * FROM evento_event");
        $row3=mysqli_fetch_assoc($query3);
        $id1=$row1['id'];
        $event=$row3['event_type'];
      //execute the SQL query and return records
      
        $result = mysqli_query($connector,"SELECT * FROM book WHERE id=$id1");
        $row2 =  mysqli_fetch_array($result);
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update Info</title>
</head>
<body>
<form action="index.php" method="POST" style="width:820px;margin-left:280px;height:520px">
 <div id="contact" class="container" style="margin-top:-100px;margin-left:-160px">
    <div class="contact-parent">
        <div class="contact-child child1" style="width:540px">
        <h2 class="hr1" style="margin-left:60px;margin-top:-20px" ><?php echo $row2['event'] ?></h2>
        <p>
                      Full Name : <br />
                     <span> <?php echo $row2['name'] ?>
                     </span>
            </p>
            <p>
                     Contact No. : <br />
                     <span> <?php echo $row2['p_no'] ?></span>
            </p>
            <p>
                     Total Memebers : <br />
                     <span><?php echo $row2['nom'] ?></span>
            </p>
       
        </div>
        <div class="contact-child child2">
            <div class="inside-contact"><br>
            <div class="card" style="display:flex"> 
                <h1 style="color:#1061c3" >Payment &nbsp</h1><br>
                <i class="fa fa-cc-mastercard" style="font-size:40px;color:#000;margin-top:10px"></i>
                <i class="fa fa-cc-paypal" style="font-size:40px;color:#000;margin-top:10px;margin-left:5px"></i>
                <i class="fa fa-cc-visa" style="font-size:40px;color:#000;margin-top:10px;margin-left:5px"></i>
                </div><br>
                <div class="form" style="dispay:flex;width:340px;">
                <div class="item">
                <p>Name on Card</p>
                <input type="text" name="name"/>
              </div>
              <div class="item">
                <p>Card Number</p>
                <input type="text" name="p_no"/>
              </div>
              <div class="item2" style="display:flex">
              <div class="item">
                <p>Expiry Date</p>
                <input type="date" name="nom"/></div>
                <div class="item" style="margin-left:20px">
                <p>CVV</p>
                <input type="text" name="nom"/></div></div>
                <div class="item">
                <hr style="margin-left:-10px;width:388px">
                <div class="book" style="display:flex">
                <button type="submit" name="book" value="book" class="btn btn-default btn-lg" style="color:#000;margin-left:110px;margin-top:20px;width:150px;margin-bottom:20px;border-radius:50px;background:rgb(255, 174, 0)">
                Pay Rs. <?php echo $row2['nom']*$row2['pay'] ?><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                </button></div></div> 
            </div>
        </div>
    </div>
</div>
</form>

            </body>
</html>
<style>
    form {
        display:flex;
        margin-top:30px;
        margin-left:80px;
      width: 90%;
      height:500px;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #a76e05; 
      }
      .banner10 {
      position: relative;
      width:450px;
      height: 510px;     
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner10 h1{
        color:  #ffffff;
        font: normal 36px 'Open Sans', cursive;
        font-size: 100px;
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
    
      .hr1{
   margin-bottom: 20px;
}
.hr1::before{
    content: '';
    position: absolute;
    z-index: 1;
}
.hr1::after{
    content: '';
    position: absolute;
    display: block;
    width: 350px;
    height: 4px;
    background: #fdaf06;
    z-index: 2;
    transform-origin: left;
    transform:scaleX(0);
    animation: animate 10s ease-in-out 0s infinite ;
}
      
</style>