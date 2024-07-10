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

// Retrieve employee ID from form
$employee_id = $_POST['employee_id'];

// SQL query to delete employee from the Employee table
$sql = "DELETE FROM Employee WHERE employee_id = $employee_id";

if ($conn->query($sql) === TRUE) {
    // If deletion is successful, display success message
    echo "Employee removed successfully!";
} else {
    // If there's an error, display error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
