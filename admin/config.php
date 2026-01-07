<?php
$host = "localhost"; 
$user = "u166903321_saleshinotgr"; 
$pass = "NatanaelH1no0504@@"; 
$db   = "u166903321_saleshinotgr";

$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
