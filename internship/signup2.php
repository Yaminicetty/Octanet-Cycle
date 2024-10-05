<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$color = $_POST['color']; // Add favorite color field
$movie = $_POST['movie']; // Add favorite movie field
$food = $_POST['food']; // Add favorite food field
$sport = $_POST['sport']; // Add favorite sport field
$activity = $_POST['activity']; // Add favorite activity field

$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("inset into registration (name, email, password, phone_number, color, movie, food, sport, activity) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisssss", $name, $email, $password, $phone_number, $color, $movie, $food, $sport, $activity);
    $stmt->execute();
    echo "Signup successful!";
    $stmt->close();
    $conn->close();
}
?>
