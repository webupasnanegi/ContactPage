<?php
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $msg = $_POST["text"];
    $conn = mysqli_connect("localhost", "root", "", "database_form") or die ("Connection Failed!");
    $sql = "INSERT INTO database_table(firstname,lastname,email,mobile,msg) VALUES ('{$firstname}','{$lastname}','{$email}','{$mobile}','{$msg}')";
    $result = mysqli_query($conn, $sql) or die("Incorrect Details");
    header("location:http://localhost/Caparisonwebsite/ContactUs.php");
    mysqli_close($conn);
?>