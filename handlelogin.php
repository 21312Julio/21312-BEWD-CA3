<?php

// Calls the file from database folder
include 'database/connection.php';

if(isset($_SESSION)){
    session_destroy();
}

$error= [];
// Sanitizing is removing anything not adhering to the filter
$username = filter_input(INPUT_POST, 'username',  FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password',  FILTER_SANITIZE_STRING);

// Checking if the information was inserted and if not it will 
// Show the message saying that the information is required
if(empty($username) || !isset($username)) {
    $error ['username'] = 'Username is empty';
}
if(empty($password) || !isset($password)){
    $error ['password'] = 'Password is empty';
}

if(empty($error)){
    $sql = 'SELECT * FROM customer WHERE username = ?';
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $username);

    // Send to database
    $stmt->execute();
    $result = $stmt->get_result(); // Getting MYSQL result
    $user = $result->fetch_assoc(); // Fetch data and assign to user 

    // Verifying the user password
    if(!empty($user)){
        if(password_verify($password, $user['password'])){
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            echo $_SESSION['id'];
            header('Location: index.php');
        } else{
            $error['password'] = 'Wrong Password';
            require_once('login.php');
        }
    } else{
        $error['username'] = 'Username doesn\'t exist';
        require_once('login.php');
    }
    } else{
        require_once('login.php');
    }
?>