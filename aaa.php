<?php

$conn = mysqli_connect("localhost", "root", "", "narpat_rajpurohit") or die ("connection failed.");

$name = mysqli_real_escape_string($conn, $_POST['Full_name']);
$email = mysqli_real_escape_string($conn, $_POST['Email']);
$phone = mysqli_real_escape_string($conn, $_POST['Number']);
$message = mysqli_real_escape_string($conn, $_POST['Message']);


$sql = "INSERT INTO users (Full_name,Email,Number, message) VALUES('{$name}', '{$email}', '{$phone}', '{$message}') ";
$result = mysqli_query($conn, $sql) or die("Query failed : ");

if(mysqli_num_rows($result) > 0){
    header("location: ");
}

?>