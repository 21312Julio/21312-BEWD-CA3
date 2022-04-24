<!-- Including the file from database folder that connects to the database -->
<?php
include 'database/connection.php';
// Getting all information from product table by the id of the product that will be edited
$sql = "SELECT * FROM product WHERE id=".$_GET['id'];
$result = $conn->query($sql);
if($result->num_rows==0){
    header("Location: product.php");
}
$row=$result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Edit Product</title>
    </head>

 
    <body style="background-color: #FFD4D4;">

        <!-- Adding navbar to the page -->
        <?php include 'navbar.php' ?>
        <div class="container">

            <!-- The form to change the data of the selected product -->        
            <h1>Edit Album</h1> 
            <form action="handleeditproduct.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?=$_GET['id']?>" name="id">
                <div class="mb-3">
                    <label for="album" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameInput" value="<?= $row['name'] ?>">
                </div>

                <div class="mb-3">
                    <label for="band" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionInput" value="<?= $row['description']?>">
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" aria-describedby="brandInput" value="<?= $row['brand']?>">
                </div>

                <div class="mb-3">
                    <label for="forType" class="form-label">Type</label>
                    <select class="form-select"  name="type" aria-label="Default select example">
                    <option>Select a Product Type</option>
                    <option <?= ($row['type'] === 'toner')? 'selected' : NULL ?> value="toner">Toner</option>
                    <option <?= ($row['type'] === 'eye cream')? 'selected' : NULL ?> value="eye cream">Eye Cream</option>
                    <option <?= ($row['type'] === 'moisturizer')? 'selected' : NULL ?> value="moisturizer">Moisturizer</option>
                </select>
                </select>
                </div>

                <div class="mb-3">
                    <label for="label" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" aria-describedby="priceInput" value="<?=$row['price'] ?>">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-description">Product Image</label>
                    <input type="file" class="form-control" id="image" name="image" value="<?= (isset($image))? $description : NULL ?>" aria-describedby="imageInput">
                    <span class="text-danger"><?= isset($error['image']) ? $error['image'] : '' ?> </span>
                </div>

                <!-- Button to submit and update any changes made -->
                <button type="submit" class="btn btn-outline-dark">Update Product</button>
            </form>
        </div>
    </body>
</html>