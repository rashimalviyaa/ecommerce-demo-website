<?php
$email = $_POST['email'];
$password = $_POST['password'];

// Validate form fields
if (empty($email) || empty($password)) {
    echo "All fields are required.";
    exit;
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'kuchbhi');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO loginpage (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss",$email, $password);
    $execval = $stmt->execute();
    if ($execval) {
        echo "Login Successful !";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>