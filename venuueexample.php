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
        
        <form action="venuueexample.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                <th>Venue</th>
          <th>Event Name</th>
          <th>Organizer Name</th>
          <th>Event Description</th>
          <th>Date</th>
          <th>Time</th>
          <th>Contact</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['venue'];?></td>
                    <td><?php echo $row['event_type'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['contact'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
