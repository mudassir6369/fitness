<?php
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_create_db = "CREATE DATABASE IF NOT EXISTS Fitness";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Fitness database created successfully.";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db("Fitness");

$sql_create_table = "CREATE TABLE IF NOT EXISTS Customers (
    first_name varchar(50),
    last_name varchar(50),
    dob date,
    gender varchar(50),
    occ varchar(50),
    height varchar(50),
    weight varchar(50),
    email VARCHAR(100),
    phone VARCHAR(50),
    address varchar(50)
)";
if ($conn->query($sql_create_table) === TRUE) {
    echo "Customers table created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
