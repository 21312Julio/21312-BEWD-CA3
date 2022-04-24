<?php
//Including the file from database folder that connects to the database
include 'database/connection.php';


// SQL command to delete a record from product table

$sql = "DELETE FROM product WHERE id=?";

$stmt=$conn->prepare($sql);

$stmt->bind_param("i", $id);

$id = $_GET['id'];

$stmt->execute();
$conn->close();

// Send the user to index.php
header("Location: index.php");

?>