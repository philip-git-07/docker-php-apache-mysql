<?php
$servername = "php-app-rds.cd22cmyu0ea0.us-east-2.rds.amazonaws.com"; // Replace with your MySQL server name
$username = "PHILIP"; // Replace with your MySQL username
$password = "Philip123"; // Replace with your MySQL password
$dbname = "php_rds"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($php-app-rds.cd22cmyu0ea0.us-east-2.rds.amazonaws.com, $PHILIP, $Philip123, $php_rds);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into 'users' table (assuming 'users' table exists with columns 'name' and 'email')
$name = "John Doe";
$email = "john@example.com";
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
