<?php
// DB Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_biblioteca";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Get the form data
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $email = $_POST['email'];

        // Insert the data into the database
        $sql = "INSERT INTO tbl_login (usuario, contraseña, email) VALUES (:usuario, :contraseña, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':contraseña', $contraseña);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        echo "Data inserted successfully!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>