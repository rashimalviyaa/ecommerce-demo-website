<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];

// Validate form fields
if (empty($name) || empty($email) || empty($password) || empty($phone_number)) {
    echo "All fields are required.";
    exit;
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'kuchbhi');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registerinfo (name, email, password, phone_number) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $password, $phone_number);
    $execval = $stmt->execute();
    if ($execval) {
        echo "Registration Successful !";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
