<?php


$firstname = $_POST['fn'];
$lastname = $_POST['ln'];
$email = $_POST['Email'];
$pass = filter_input(INPUT_POST, "pass", FILTER_VALIDATE_INT);
$rpassword = filter_input(INPUT_POST, "rp", FILTER_VALIDATE_INT);
$phonenumber = $_POST['pn'];
$cn = $_POST['cn'];
$cs = $_POST['cs'];
$description = $_POST['Descriptions'];



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

    $sql = "INSERT INTO register (fn, ln, Email, pass,rp, pn, cn, cs, Descriptions ) vALUES ('$firstname','$lastname','$email',
                        '$pass','$rpassword','$phonenumber','$cn','$cs','$description' )";
    


$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_erorr($conn));
}



mysqli_stmt_execute($stmt);
// echo "Record Saved. ";
if ((!$firstname) || (!$lastname) || (!$email) || (!$pass) || (!$rpassword)) {
    echo "Не сте попълнили всички задължителни полета! Моля, върнете се и попълнете!";
    
}else
header("Location: dashboard.html");





?>
