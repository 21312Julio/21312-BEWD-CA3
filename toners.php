<!-- Include Database -->

<?php 
include 'database/connection.php';
$sql = "SELECT * FROM product WHERE type='toner'";
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

    <body style="background-color: #FFD4D4;">
     <!-- Adding navbar to the page -->
    <?php include 'navbar.php'?>
    <div class="container" style="margin-top: 20px;" >
    
        <!-- New container with grid structure that show the cards on the screen -->    
        <div class="container">
            <div class="row">

            <!-- The cards are getting information from the database and showing the image, name, price, and description -->
            <?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo '<div class="col-3" style="margin: 30px">';
                            echo '<div class="card" style="width: 18rem;">';
                                // Rendering the image on the card
                                echo '<img src="' .$row['image']. '" class="card-img-top" style="width:100%" alt="...">';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">' .$row['name']. '</h5>';
                                    echo '<h5 class="card-text"> €' .$row['price']. '</h5>';
                                    echo '<p class="card-text">'  .$row['description']. '</p>';
                                    echo "<td><a class='btn btn-outline-dark' style='margin: 2px' href='editproduct.php?id=".$row['id']."' role='update'>Update</a></td>";
                                    echo "<td><a class='btn btn-outline-dark' style='margin: 2px' href='handledeleteproduct.php?id=".$row['id']."' role='delete'>Buy</a></td>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
            ?>
        </div>
    </div>
  </body>
</html>