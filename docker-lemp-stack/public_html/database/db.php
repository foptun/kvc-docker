<?php
$host = 'db';
$user = 'root';
$pass = '1234';
$db = 'shop';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
//     echo "Connected to MySQL server successfully!";
}

$query = $conn->query("SET NAMES UTF8");

?>
