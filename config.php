<?php 
$serverHost = "db";
$serverUsername = "root";
$serverPassword = "example";
$database = "myDB";

// Create connection.
$conn = new mysqli($serverHost, $serverUsername, $serverPassword);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database.
$sql = "CREATE DATABASE myDB";

// Check if successfully created database.
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// Close connection.
$conn->close();

// Create connection again to select the created database.
$conn = new mysqli($serverHost, $serverUsername, $serverPassword, $database);

// Check connection.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Sql to create table.
$sql = "CREATE TABLE user_sample (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50) NOT NULL,
password VARCHAR(128) NOT NULL
)";

// Check if successfully created table.
if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

// Close connection.
$conn->close();
?>