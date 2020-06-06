<?php
$db_host = getenv('MYSQL_HOSTNAME');
$db_root_user = getenv('MYSQL_ROOT_USER');
$db_root_password = getenv('MYSQL_ROOT_PASSWORD');
$db_name = getenv('MYSQL_DATABASE');
// Create connection

$conn = new mysqli($db_host,$db_root_user,$db_root_password);
// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE $db_name";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully using Object Oriented Method";
} 
else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
