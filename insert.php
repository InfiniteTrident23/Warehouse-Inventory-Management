<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$warehouse_id = $_POST['warehouse_id']; // Adjusted to include warehouse_id

// SQL query to insert data into the inventory table
$sql = "INSERT INTO Inventory (product_name, quantity, warehouse_id) VALUES ('$product_name', '$quantity', '$warehouse_id')";

if ($conn->query($sql) === TRUE) {
    // If insertion is successful, display success message
    echo "New inventory added successfully!";
} else {
    // If there's an error, display error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
