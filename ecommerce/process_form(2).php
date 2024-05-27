<?php
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

// Validate form fields
if (empty($name) || empty($email) || empty($message)) {
    echo "All fields are required.";
    exit;
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'kuchbhi');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO contactinfo (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $execval = $stmt->execute();
    if ($execval) {
        echo "Message Received ! Kindly wait for us to contact you back via email. Thank you for your feedback and patience!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>