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


$jobtitle = $_POST['jobtitle'];
$location = $_POST['locations'];
$salary = $_POST['salary'];
$description = $_POST['descriptions'];
$creator_email = $_SESSION['Email'];

$sql = "INSERT INTO jobs (jobtitle, locations, salary, descriptions, Email ) vALUES ('$jobtitle','$location','$salary', '$description', '$creator_email')";
    


$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_erorr($conn));
}



mysqli_stmt_execute($stmt);
// echo "Record Saved. ";
if ((!$jobtitle) || (!$description)) {
    echo "Не сте попълнили всички задължителни полета! Моля, върнете се и попълнете!";
    
}else
header("Location: index.html");



?>