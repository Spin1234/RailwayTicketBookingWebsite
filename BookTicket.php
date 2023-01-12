<?php
session_start();
$em=$_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="BtStyle.css"/>
  </head>
  <body>
    <header>
      <nav>
      <div class="logo"><h1 class="a">Indian Railways</h1></div>
        <div class="menu">
          <a href="#">Home</a>
          <a href="BookedTickets.php?email=<?php echo $em; ?>">Tickets</a>
          <a href="#">About</a>
          <a href="index.php">Logout</a>
        </div>
      </nav>
      <main>
        <div class="container">
          <form action="BookTicketDb.php" method="post">
            <h1 class="form-title">Book Your Ticket</h1>
            <div class="main-user-info">
            <div class="user-input-box">
              <label for="Departure">Departure</label>
              <input
                type="text"
                name="departure"
                id="Departure"
                required
              />
            </div>
            <div class="user-input-box">
              <label for="Arrival">Arrival</label>
              <input
                type="text"
                name="arrival"
                id="Arrival"
                required
              />
            </div>
            <div class="user-input-box">
              <label for="Trip">Choose your Trip: </label>
              <select id="Trip" name="trip">
                <option value="One-Way">One-Way</option>
                <option value="Round-Trip">Round-Trip</option>
              </select>
            </div>
            <div class="user-input-box">
              <label for="Date">Date</label>
              <input type="date" name="date" id="Date" required />
            </div>
            <div class="form-submit-btn">
              <input style="display: block; width: 600px; cursor: pointer;" type="submit" value="Book Now"/>
            </div>
            </div>
          </form>
        </div>
        
      </main>
    </header>
  </body>
</html>
