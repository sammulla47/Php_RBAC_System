<?php
include 'DbConnection.php';

// Set the static AuthCode
$validAuthCode = "free@123";

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password for security
$role = $_POST['role'];
$authcode = $_POST['authcode'];

// Validate AuthCode
if ($authcode !== $validAuthCode) {
    die("Invalid AuthCode.");
}

// Insert data into database
$sql = "INSERT INTO User (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
     echo "Something Went To Wrong Please Try Again";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
