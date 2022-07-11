<?php
session_start();

$host = "localhost";
$dbname = "job_offer";
$username = "root";
$password = "";


$conn = mysqli_connect(hostname: $host,
                       username: $username, 
                       password: $password,
                       database: $dbname);
                       
                       if(mysqli_connect_errno()){
                        die("Connection Error: " . mysqli_connect_error);
                       }

    
    $email = $conn->real_escape_string($_POST['Email']) ?? $_SESSION['Email'] ??"";
    $pass = $conn->real_escape_string($_POST['pass']) ?? $_SESSION['pass'] ??"";

 
    $query = "SELECT `Email` AND `pass` FROM `register` WHERE `Email` = '$email' AND `pass` = '$pass'";
    
    
    $result =$conn->query($query);
    if($result->num_rows > 0) {
        var_dump($email);
        header("Location: dashboard.html");
    }else
        header("Location: register.html");

?>


