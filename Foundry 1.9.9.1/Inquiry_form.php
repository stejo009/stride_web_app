<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



	$fname = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];



$sql = "INSERT INTO Inquiry (name, email, phone, msg)
VALUES ('$fname', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Enquiry send Successfully";


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
