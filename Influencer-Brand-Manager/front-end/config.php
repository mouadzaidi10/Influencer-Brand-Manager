<?php 



//POD

$server = "localhost";
$user = "root";
$pass = "";
$database = "projet_web_ensa";

// $conn = mysqli_connect($server, $user, $pass, $database, 3308);
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
//port : 3308
?>