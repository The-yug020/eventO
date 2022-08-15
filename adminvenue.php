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
    <link rel="stylesheet" href="eventO-main.css">
    <link rel="stylesheet" href="venue.css">
    <link rel="stylesheet" href="eventO-WelcomePage.css">
    <title>eventO-EventList</title>
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
    <div class="table" style="height:100vh;background-attachment:fixed;width:100%">
        <table border="3" style= "background-color: #fff; color: black; margin: 0 auto;" >
      <br>
      <div class="hr1"><h2>Event List</h2></div></br>
      <thead>
        <tr style="background-color: #000; color: #fdaf06 ;">
          <th>Venue</th>
          <th>Organizer Name</th>
          <th>Event Description</th>
          <th>Date</th>
          <th>Contact</th>
          <th>Delete Event</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){?>
            <tr>
    <td><?php echo $row['venue']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['description']; ?></td> 
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['contact']; ?></td>   
    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>	
<?php
          }
        ?>
      </tbody>
    </table><br>
      <div class="back"><a href="admin/home.php"><button> Back <i class="fa fa-sign-out"></i></button></a>
    </div>
        </div>
     </div>
        </div>
    </body>
</html>