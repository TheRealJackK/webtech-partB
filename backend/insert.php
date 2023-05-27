<?php

// Get form data
$sender = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Connect to db
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "bnepm";


$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}

// Insert data into db
$sql = "INSERT INTO enquiries (sender, subject, message) 
        VALUES ('$sender', '$subject', '$message')";

if ($connect->query($sql) === TRUE) {
    // Redirect back to site after insertion is complete
    header("Location: http://localhost/webtech-partB/pages/thankyou.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

// Close connection
$connect->close();