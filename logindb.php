<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "rotbs");
$email=$_POST['email'];
$password=$_POST['password'];

            $sql1 = "SELECT * FROM `users`";
            $result1 = mysqli_query($con,$sql1);
            $num = mysqli_num_rows($result1);
            while ($row1 = mysqli_fetch_assoc($result1)) {
                if ($row1['Password']==$password && $row1['Email']==$email) {
                    echo "Successfull!";
                    $_SESSION["First Name"]=$row1['FirstName'];
                    $_SESSION["LastN"]=$row1['LastName'];
                    $_SESSION["gender"]=$row1['Gender'];
                    $_SESSION["email"]=$row1['Email'];
                    header("location: BookTicket.php");
                    die();
                }
            }
            $msg="wrong password or email!";
            header("location: index.php?em=$msg");
?>