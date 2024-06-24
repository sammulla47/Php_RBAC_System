<?php
include 'DbConnection.php';

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Fetch user from database
$sql = "SELECT * FROM User WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Password is correct, start a new session
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        
        // Redirect to index.php
        header("Location: index.php");
        exit();
    } else {
        // Password is incorrect
        echo "Invalid email or password.";
    }
} else {
    // No user found with that email
    echo "Invalid email or password.";
}

$stmt->close();
$conn->close();
?>
