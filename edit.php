<?php

include('functions.php'); // Using database connection file here

$id = $_GET['id']; // get id through query string

$query = mysqli_query($db,"select * from evento_event where id='$id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];
    $venue = $_POST['venue'];
    $address = $_POST['address'];
    $event_type = $_POST['event_type'];
    $contact_person = $_POST['contact_person'];
    $image=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    $file = rand(1000,100000)."-".$_FILES['poster']['name'];
    $file_loc = $_FILES['poster']['tmp_name'];
    $folder="uploads/";
 
    move_uploaded_file($file_loc,$folder.$file);
	
    $edit = mysqli_query($db,"UPDATE evento_event SET name='$name',contact='$contact',date='$date',time='$time',description='$description',venue='$venue',address='$address',event_type='$event_type',contact_person='$contact_person',image='$image',poster='$file' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:myevents.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
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
    <link rel="stylesheet" href="eventO-WelcomePage.css">
    <link rel="stylesheet" href="events.css">
    <title>Update Info</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
             <div class="banner11">
              <div class="banner10">
                <h1>event<span>O</span></h1>
              </div>
              </div>
              <div class="edit">
              <h2 style="margin-bottom:rgb(255, 187, 0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update Event</h2>
              <div class="item">
                <p>Date of Event</p>
                <input type="hidden" name="id" />
                <input type="date" name="date" value="<?php echo $row['date'] ?>" placeholder="Update Date"/>
                <i class="fas fa-calendar-alt"></i>
              </div>
              <div class="item">
                <p>Time of Event</p>
                <input type="time" name="time" value="<?php echo $row['time'] ?>" placeholder="Update Time"/>
                <i class="fas fa-clock"></i>
              </div>
              <div class="item">
                <p>Description of Event</p>
                <textarea rows="3" name="description" value="<?php echo $row['description'] ?>" placeholder="Update Description" ></textarea>
              </div>
              <div class="item">
                <p>Promoter's Name</p>
                <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Update Organizer Name"/>
              </div>
              <div class="item">
                <p>Venue Name</p>
                <input type="text" name="venue" value="<?php echo $row['venue'] ?>" placeholder="Update Venue"/>
              </div></div>
              <div class="edit2">
              <div class="item">
                <p>Venue Address</p>
                <input type="textarea" name="address" value="<?php echo $row['address'] ?>" placeholder="Update Address" />
              </div>
        
              <div class="item">
                <p>Event Name</p>
                <input type="text" name="event_type" value="<?php echo $row['event_type'] ?>" placeholder="Update Event Name"/>
              </div>
              <div class="item">
                <p>Contact Person</p>
                
                  <input type="text" name="contact_person" value="<?php echo $row['contact_person'] ?>" placeholder="Update Contact Person" />
                
              </div>
              <div class="item">
                <p>Contact Number</p>
                <input type="text" name="contact" value="<?php echo $row['contact'] ?>" placeholder="Update Contact No." Update/>
              </div>
              <input type="hidden" name="size" value="1000000" />
              <div class="item">
                <p>Event Image</p>
                <input type="file" name="image" value="<?php echo $row['image'] ?>" Required/>
              </div>
              <div class="item">
                <p>Event Poster</p>
                <input type="file" name="poster" value="<?php echo $row['poster'] ?>" Required/>
              </div>
              <div class="send">
              <input type="submit" name="update" value="Update">
              </div>
              </div>
            </form>
            </body>
</html>
<style>
    form {
        display:flex;
        margin-top:11px;
        margin-left:80px;
      width: 90%;
      height:550px;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #a76e05; 
      }
      .banner10 {
      position: relative;
      width:450px;
      height: 510px;
      background-image: url("update.png");      
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
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      input[type=radio], input.other {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      #radio_5:checked ~ input.other {
      display: block;
      }
      input[type=radio]:checked + label.radio:before {
      border: 2px solid #a76e05;
      background: #a76e05;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 7px;
      left: 5px;
      width: 7px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .send {
      margin-top: 20px;
      margin-left:200px;
      text-align: center;
      }
      .send input[type=submit]{
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #a76e05;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      .send input[type=submit]:hover {
      background: #996504;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
</style>