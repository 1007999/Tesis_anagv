<?php
// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Insert the data into the database
// (assuming you have a PDO connection established)
$sql = "INSERT INTO tbl_login (username, password) VALUES (:username, :password)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

echo "Data inserted successfully!";
?>