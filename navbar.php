<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFD4D4;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SKIN SHOP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="addproduct.php">Add Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="toners.php">Toners</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="moisturizers.php">Moisturizers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="eyecreams.php">Eye Creams</a>
            </li>
        </ul>

            <form class="d-flex">
                <?php 
                    session_start();
                    if(isset($_SESSION) && isset($_SESSION['id'])){
                        echo  "<a class='btn disabled btn-dark' href='#'>".$_SESSION['username']."</a>";
                        echo "<a class='btn btn-outline-danger' href='logout.php'>Log Out</a>";
                    }
                    else{
                        echo "<a class='btn btn-outline-dark' href='login.php' style='margin: 2px'>Log In</a>";
                        echo "<a class='btn btn-outline-dark' href='register.php' style='margin: 2px'>Sign In</a>";
                        session_destroy();
                    }
                ?>
            </form>
        </div>
    </div>
</nav>