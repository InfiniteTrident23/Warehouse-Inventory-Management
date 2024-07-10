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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data and delete manager from database
    $manager_id = $_POST["manager_id"];
    
    // Example: Delete manager from database
    $sql = "DELETE FROM Manager WHERE manager_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $manager_id); // 'i' indicates integer type for manager_id
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        // Manager successfully deleted
        echo "Manager successfully removed.";
    } else {
        // Manager not found or deletion failed
        echo "Error: Manager not found or deletion failed.";
    }
}
?>

