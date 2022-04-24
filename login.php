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
        <!-- Add navbar to the page -->
        <?php include 'navbar.php' ?>
            <div class="container">                 
                <form action="handlelogin.php" class="needs-validation" novalidate method="POST" autocomplete="off">
                    <div class="mb-3">
                        <!-- Form for username and password -->
                        <label for="username" class="form-label">username</label>
                        <input  type="text" 
                                class="form-control" 
                                id="username" 
                                name="username"
                                autocomplete="off" 
                                aria-describedby="usernameHelp" 
                                value="<?= isset($username)? $username: NULL ?>" > 
                        <span class="text-danger"><?= isset($error['username']) ? $error['username'] : '' ?> </span>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input  type="password" 
                                class="form-control" 
                                id="password" 
                                name="password" 
                                autocomplete="off"
                                aria-describedby="passwordHelp" 
                                value= "" > 
                        <span class="text-danger"><?= isset($error['password']) ? $error['password'] : '' ?> </span>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Enter</button>
                </form>
            </div> 
    </body>
</html>