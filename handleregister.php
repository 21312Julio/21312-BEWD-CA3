<?php 

// Calls the file from database folder to connect
include 'database/connection.php';
if(isset($_SESSION)){
    session_destroy();
}

// Link the information to the user database
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if ($password === $confirmPassword){
    // Encrypt the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
}

$sql = "INSERT INTO customer (username, email, phone, password) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);



$stmt->bind_param("ssss", $username, $email, $phone, $hashedPassword);

// Send to database
$stmt->execute();
// Check for id already in use
if($stmt->insert_id){
    $error['username'] = 'User in use';
}

session_start();
$_SESSION['username'] = $username;
$_SESSION['id'] = $stmt->insert_id;

$conn->close();

// Will direct the user to the index page
header("Location: index.php");

?>