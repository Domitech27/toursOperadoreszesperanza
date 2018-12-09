<?php

$username = "root";
$password1 = "admin";
$dbname = "prueba";


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$password=$_POST['password'];

$_SESSION['name']=$fname." ".$lname;
$_SESSION['uname']=$uname;

// Create connection
$conn = new mysqli("localhost:3306", $username, $password1, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO username VALUES ('$fname','$lname','$uname','$password')";

if ($conn->query($sql) == TRUE) {
    include 'index1.php';
} else {
    echo "Error 404: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>