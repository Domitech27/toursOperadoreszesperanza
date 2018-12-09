<?php
$servername = "localhost:3306";
$username = "root";
$password = "admin";
$dbname = "prueba";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO username (firstname, lastname, email)
VALUES ('anto', 'anto', 'a@a.com')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>