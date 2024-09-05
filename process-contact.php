<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infosite_innovation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, subject, message, service_type, preferred_contact, newsletter) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $phone, $subject, $message, $service_type, $preferred_contact, $newsletter);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$service_type = $_POST['service-type'];
$preferred_contact = $_POST['preferred-contact'];
$newsletter = isset($_POST['newsletter']) ? 1 : 0;

if ($stmt->execute()) {
    // Redirect to thank you page
    header("Location: thank-you.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
