<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Add New Product</title>
    </head>
    <body style="background-color: #FFD4D4;">
        <!-- Adds the navbar -->
        <?php include 'navbar.php' ?>
        <div class="container" style="margin-top: 20px"> 
            <form action="handleaddproduct.php" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
            <!-- Form to add new product to database -->
            <div class="mb-3">
                <label for="album" class="form-label">Product Name</label>
                <input type="text" class="form-control" id=""  name="name" aria-describedby="nameInput">
            </div>

            <div class="mb-3">
                <label for="description" class="form-description">Description</label>
                <textarea class="form-control" placeholder="Leave description here" name="description" id="" style="height: 100px"></textarea>
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id=""  name="brand" aria-describedby="brandInput">
            </div>

            <div class="mb-3">
                <label for="forType" class="form-label">Type</label>
                <select class="form-select"  name="type" aria-describedby="typeInput">
                    <option selected>Select a Product Type</option>
                    <option value="toner">Toner</option>
                    <option value="eye cream">Eye Cream</option>
                    <option value="moisturizer">Moisturizer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-description">Price</label>
                <input type="text" class="form-control" id=""  name="price" aria-describedby="priceInput">
            </div>

            <div class="mb-3">
                <label for="image" class="form-description">Product Image</label>
                <input type="file" class="form-control" id="image" name="image" value="<?= (isset($image))? $description : NULL ?>" aria-describedby="imageInput">
                <span class="text-danger"><?= isset($error['image']) ? $error['image'] : '' ?> </span>
            </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </body>
</html>