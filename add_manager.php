<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "inventory_management"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$corporation_id = $_POST['corporation_id'];
$salary = $_POST['salary'];
$designated_floor = $_POST['designated_floor'];

$sql = "INSERT INTO Manager (name, corporation_id, salary, designated_floor) VALUES ('$name', '$corporation_id', '$salary', '$designated_floor')";

if ($conn->query($sql) === TRUE) {
    echo "Manager added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
