<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_biblioteca";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql code to create table
    $sql = "CREATE TABLE tbl_login (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            usuario VARCHAR(30) NOT NULL,
            contraseña VARCHAR(30) NOT NULL,
            email VARCHAR(50)
            )";

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo "Table employees created successfully";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>