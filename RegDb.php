<?php
$con = mysqli_connect("localhost", "root", "", "rotbs");
if ($con==false) {
    echo "Error!";
}
$FirstName=$_POST['first_name'];
$MiddleName=$_POST['middle_name'];
$LastName=$_POST['last_name'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$email=$_POST['email'];
$adhar=$_POST['adhar'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql ="INSERT INTO `users`(`id`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `DOB`, `Email`, `Aadhaar No`, `Address`, `Mobile No`, `Password`) VALUES ('','$FirstName','$MiddleName','$LastName','$gender','$date','$email','$adhar','$address','$mobile','$password')";
if(mysqli_query($con, $sql)){
   // echo "Successfully Registered!";
  //  echo "<br><br><a style='text-decoration: none;' href='index.html'>Log In</a>";
  header('location: index.php');
}
else{
    echo "error";
}
?>