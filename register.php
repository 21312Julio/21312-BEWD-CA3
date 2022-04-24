<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SKIN SHOP</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Skin Shop</title>
    </head>
    <body style="background-color: #FFD4D4;">
        <!-- Adding navbar to the page -->
        <?php include 'navbar.php' ?>
        <div class="container">
            <!-- Form to get user input on register information -->
            <form action="handleregister.php" class="needs-validation" novalidate method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameInput" value="" > 
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailInput" value="" > 
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Phone</label>
                    <input type="email" class="form-control" id="phone" name="phone" aria-describedby="phoneInput" value="" > 
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordInput" value="" > 
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" aria-describedby="confirmPasswordInput" value="" > 
                </div>
                <button type="submit" class="btn btn-outline-dark">Create Account</button>
            </form>
        </div>   
    </body>
</html>