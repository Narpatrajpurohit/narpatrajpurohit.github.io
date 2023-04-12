<?php
header('content-type: application/json');
header('access-control-allow-origin: *');
header('access-control-allow-methods: POST');
header('access-control-allow-headers: acess-control-allow-headers,acess-control-allow-methods, content-type, authorization, X-request-with');

$data = json_decode(file_get_contents("php://input"), true);

$name    = $data["Full_name"];
$email   = $data["Email"];
$phone   = $data["Number"];
$message = $data["Message"];

$conn = mysqli_connect("localhost", "root", "", "narpat_rajpurohit") or die(" mysli Query failed.");


$sql = "INSERT INTO users(Full_name, Email, Number, message) VALUE ('{$name}', '{$email}', {$phone}, '{$message}')";


if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Student record found', 'status' => true));

}else{

    echo json_encode(array('message' => 'Student record not found', 'status' => false));
}

?>

