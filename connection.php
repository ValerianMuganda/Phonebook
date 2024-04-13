<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    // echo "inserted successfully";
}

$databaseName = "phone_db";
$sql = "CREATE DATABASE IF NOT EXISTS $databaseName";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully or already exists";
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->close();
?>
