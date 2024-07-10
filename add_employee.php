<?php
// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "inventory_management"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from form
$name = $_POST['name'];
$manager_id = $_POST['manager_id'];
$salary = $_POST['salary'];
$designated_floor = $_POST['designated_floor'];

// SQL query to insert data into the Employee table
$sql = "INSERT INTO Employee (name, manager_id, salary, designated_floor) VALUES ('$name', '$manager_id', '$salary', '$designated_floor')";

if ($conn->query($sql) === TRUE) {
    // If insertion is successful, display success message
    echo "Employee added successfully!";
} else {
    // If there's an error, display error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
