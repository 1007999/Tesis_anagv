<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_biblioteca";

$username = $_GET['username'];
$password = $_GET['password'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Authentication successful
    header('Location: dashboard.php');
} else {
    // Authentication failed
    header('Location: login_error.php');
}

$conn->close();
?>