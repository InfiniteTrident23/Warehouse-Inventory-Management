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
$product_name = $_POST['product_name'];
$warehouse_id = $_POST['warehouse_id']; // Adjusted to include warehouse_id

// SQL query to insert data into the inventory table
$sql = "DELETE FROM inventory WHERE product_name='$product_name' AND warehouse_id='$warehouse_id'";

if ($conn->query($sql) === TRUE) {
    // If insertion is successful, display success message
    echo "Inventory sold successfully!";
} else {
    // If there's an error, display error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
