<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "rotbs");
if ($con==false) {
    echo "Error!";
}
$fn=$_SESSION["First Name"];
$ln=$_SESSION["LastN"];
$gender=$_SESSION["gender"];
$email=$_SESSION["email"];
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$trip=$_POST['trip'];
$date=$_POST['date'];
$uid=uniqid();
$sql ="INSERT INTO `tickets`(`id`, `FirstName`, `LastName`, `Gender`, `Email`, `Departure`, `Arrival`, `Trip`, `Date`, `tid`) VALUES ('', '$fn', '$ln', '$gender', '$email', '$departure', '$arrival', '$trip', '$date', '$uid')";
if(mysqli_query($con, $sql)){
    echo "Ticket successfully booked!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@30,300,0,-1" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    
    <style>
        .header {
    /* existing styles */
    background-image: url('Indian_Railway_Logo.png'); /* Add the image */
    background-size: contain; /* Scale the image to fit the container */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-position: center; /* Position the image in the center of the container */
    opacity: 100%;
  }
  .header {
    background-color: #4b3702cc; /* fallback color in case image not loaded */
    /* other existing styles */
}

.ticket {
    margin: auto;
    width: 900px; /* Increased the width of the ticket */
    height: 462px; /* Increased the height of the ticket */
    background-color: #F7F9F9; /* Changed the background color */
    border: 2px solid #7d430e; /* Changed the border color and width */
  }
  .passenger-name {
    font-size: 30px; /* Increased the font size */
    color: #4b3702; /* Distinctive color */
    font-weight: bold;
}

  #mn1{
    font-size:20px;
    color: #2196F3;
  }
  .header {
    height: 80px; /* Increased the height */
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px; /* Increased the padding */
    border-bottom: 2px solid #7d430e;  /* Changed the border color and width */
    background-color: #7d430e; /* Changed the background color */
  }
  
  .logo {
    font-size: 36px; /* Increased the font size */
    font-weight: bold;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: rgb(255, 255, 255); /* Changed the text color */
  }

  .title {
    font-size: 36px; /* Increased the font size */
    font-weight: bold; 
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: rgb(255, 255, 255); /* Changed the text color */
  }
  
  .row {
    margin-top: 10px;
    margin-left: 20px;
    margin-bottom: 27px; /* Increased the margin */
  }
  
  .label {
    font-weight: bold;
    
    color: #2196F3; /* Changed the text color */
  }
  
  .value {
    margin-left: 10px; /* Increased the margin */
    color: #424242; /* Changed the text color */
  }
  

  .footer {
    height: 70px; /* Increased the height */
    padding: 20px; /* Increased the padding */
    border-top: 2px solid #7d430e; /* Changed the border color and width */
    background-color: #F7F9F9; /* Changed the background color */
    text-align: center;
  }
  
  .disclaimer {
    font-size: 11px; /* Increased the font size */
    color: #7e7e7e; /* Changed the text color */
  }
  
    </style>
    
</head>
<body>
    <div>
        <h3 style="color: grey; font-family: Times New Roman, Times, serif;">Hello <?php echo $fn; ?>, Indian Railways wishes you happy journey!</h3>
    </div>
    <div class="ticket">
  <div class="header">
    <div class="logo" style="color:rgb(255, 255, 255);">INDIAN  RAILWAY</div>
    <div class="title">HAPPY JOURNEY</div>
  </div>
  <div class="content">
    <div class="row">
      <div class="label">Passenger:</div>
      <div class="value"><?php echo $fn." ".$ln; ?> <span class ="material-symbols-rounded" id = "mn1" >verified</span>
       </div>
      </div> 
    <div class="row">
      <div class="label">From:</div>
      <div class="value"><?php echo $departure; ?></div>
    </div>
    <div class="row">
      <div class="label">To:</div>
      <div class="value"><?php echo $arrival; ?></div>
    </div>
    <div class="row">
      <i></i>
      <div class="label">Date:</div>
      <div class="value"><?php echo $date; ?></div>
    </div>
    <div class="row">
      <div class="label">Time:</div>
      <div class="value"><?php echo date("h:i:sa"); ?></div>
    </div>
    <div class="row">
      <div class="label">Ticket Id:</div>
      <div class="value"><?php echo $uid; ?></div>
    </div>
  </div>
  <button onclick="window.print()" style="margin-top: 0; margin-left: 50%; border: 1px solid; border-radius: 5px; width: 40px; height: 30px; align-items: center; justify-content: center; text-align: center; background-color: #2196F3; color: white;">Print</button>
  <div class="footer">
    <div class="disclaimer">Valid for one trip on the date and time specified above. Non-refundable.</div>
  </div>
</div>
</body>
</html>
