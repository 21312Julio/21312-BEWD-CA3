<?php
// Handler for adding product

// Obtain the file from database folder that connects to the database 
include 'database/connection.php';

$error=[];

// Sanitizing is removing anything not adhering to the filter

$name = filter_input(INPUT_POST, 'name',  FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description',  FILTER_SANITIZE_STRING);
$brand = filter_input(INPUT_POST, 'brand',  FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, 'type',  FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price',  FILTER_SANITIZE_NUMBER_INT);

// Checking if the information was inserted and if not it will 
// Show the message saying that the information is required

if(!isset($name) || empty($name)){
        $error['name'] = 'Product name is required';
}
if(!isset($description) || empty($description)){
        $error['description'] = 'Description is required';
}
if(!isset($brand) || empty($brand)){
    $error['brand'] = 'Brand is required';
}
if(!isset($type) || empty($type)){
        $error['type'] = 'Type is required';
}
if(!isset($price) || empty($price)){
        $error['price'] = 'Price is required';
}
$instock = true;

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


if(empty($error)){

        $sql = "INSERT INTO product (name, description, brand, type, instock, price, image)
        VALUES (?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql); 

        $stmt->bind_param("ssssbis", $name, $description, $brand, $type, $instock, $price, $target_file);

        // Send to database
        $stmt->execute();
        $conn->close();

        // Send the user to index.php
        header("Location: index.php");
}else{ 

        // To check the inputs the information is taken from the form on addproduct.php 
        require_once('addproduct.php');
}
?>
