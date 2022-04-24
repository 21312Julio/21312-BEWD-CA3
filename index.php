<!-- Include Database -->

<?php 
include 'database/connection.php';
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SKIN SHOP</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Skin Shop</title>
        <style>
        </style>
    </head>

    <body>
     <!-- Adding navbar to the page -->
    <?php include 'navbar.php'?>
    <div class="container" style="margin-top: 200px; text-align: center;">
    <body class="h-100 text-center text-dark" style="background-color: #FFD4D4;">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  
    <!-- Message at the center of the page -->
    <main class="px-3">
    <h1>SKIN SHOP</h1>
    <p class="lead">SALES 50% OFF</p>
    <p class="lead">
    </p>
  </main>
  </body>
</html>