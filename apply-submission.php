<?php


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$custommassage = $_POST['custommassage'];




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
//echo "Connection was successful.";

$sql = "INSERT INTO applysubmissions (firstname, lastname, email,custommassage ) vALUES ('$firstname','$lastname','$email','$custommassage')";
    


$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_erorr($conn));
}



mysqli_stmt_execute($stmt);
// echo "Record Saved. ";
if ((!$firstname) || (!$lastname) || (!$email) || (!$custommassage)) {
    echo "Не сте попълнили всички задължителни полета! Моля, върнете се и попълнете!";
    
}else
header("Location: dashboard.html");





?>
