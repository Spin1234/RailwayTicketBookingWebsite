<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Trip</th>
            <th>ticket Id</th>
            <th>Date</th>
        </tr>
        <?php
$emailc=$_GET['email'];
$con=mysqli_connect("localhost", "root", "", "rotbs");
$sql="SELECT * FROM `tickets`";
$result = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_assoc($result)) {
    if ($row1['Email']==$emailc) {
?>
        <tr>
            <td><?php echo $row1['FirstName']; ?></td>
            <td><?php echo $row1['Departure']; ?></td>
            <td><?php echo $row1['Arrival']; ?></td>
            <td><?php echo $row1['Trip']; ?></td>
            <td><?php echo $row1['Tid']; ?></td>
            <td><?php echo $row1['Date']; ?></td>
        </tr>
<?php
    }
}
?>
 </table>
</body>
</html>