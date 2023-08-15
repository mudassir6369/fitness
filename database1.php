<?php
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_create_db = "CREATE DATABASE IF NOT EXISTS contact";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Contact database created successfully.";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db("contact");

$sql_create_table = "CREATE TABLE IF NOT EXISTS users (
    name1 varchar(50),
    email varchar(50),
    subject1 varchar(50),
    message1 varchar(50)
)";
if ($conn->query($sql_create_table) === TRUE) {
    echo "Users table created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
