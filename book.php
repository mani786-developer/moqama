<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moqama";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $departure = $_POST['departure'];
    $arrival = $_POST['delivery'];
    $weight = $_POST['weight'];
    $dimensions = $_POST['dimensions'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO bookings (departure ,arrival,weight,dimension ,name, email, phone, message) VALUES (' $departure','$arrival',' $weight ','$dimensions','$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
