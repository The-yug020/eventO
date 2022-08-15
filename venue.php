<?php
include('functions.php');
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM evento_event WHERE CONCAT(`venue`, `event_type`, `name`, `date`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM evento_event";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "evento_signup");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
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
    <link rel="stylesheet" href="venue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
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
    <div class="table"style="height:100vh;background-attachment:fixed;width:100%">
      <form action="venue.php" method="post"><br>
      <div class="hr1"><h2>Event List</h2></div></br>
      <div class="form"> <i class="fa fa-search  "></i> <input type="text" class="form-control form-input" name="valueToSearch" 
      placeholder=" Search An Event" style="font-size:16px">
      <input type="submit" name="search" style="width:0;background:#000"><span class="left-pan"><i type="submit" name="search" class="fa fa-microphone"></i></span><br><br>
            </div>
<style>
.height {
    height: 13vh
}
.container{
    margin-left: 72%;
}
.form {
    position: relative;
    margin-left: 72%;
}

.form .fa-search {
    position: absolute;
    top: 20px;
    left: 12px;
    right:20px;
    color: #9ca3af
}
input{
    width: 300px;
}
.form span {
    position: absolute;
    left: 260px;
    top: 13px;
    padding: 2px;
    border-left: 1px solid #d1d5db;
}

.left-pan {
    padding-left: 7px
}

.left-pan i {
    padding-left: 10px
}

.form-input {
    height: 55px;
    text-indent: 33px;
    border-radius: 10px
}

.form-input:focus {
    box-shadow: none;
    border: none;
}
</style>
            
            <table border="3" style= "background-color: #fff; color: black; margin: 0 auto;">
                <tr style="background-color: #000; color: #fdaf06 ;">
                <th>Venue</th>
          <th>Event Name</th>
          <th>Organizer Name</th>
          <th>Event Description</th>
          <th>Date</th>
          <th>Time</th>
          <th>Contact</th>
          <th>Book Event</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)){
                    if($row['date'] >= date('Y-m-d') && $row['status']=='approved'){?>
                <tr>
                    <td><?php echo $row['venue'];?></td>
                    <td><?php echo $row['event_type'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <td><a href="book.php?id=<?php echo $row['id']; ?>">Book</a></td>
                </tr>
                <?php
                } 
                }
                ?>
            </table>
        </form>
      <div class="back"><a href="dashboard.php"><button> Back <i class="fa fa-sign-out"></i></button></a></div>
        </div>
     </div>
        </div>
    </body>
</html>