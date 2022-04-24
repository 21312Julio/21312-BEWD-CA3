<?php
// Destroy current user session
session_start();
if(isset($_SESSION)){
    session_destroy();
    
}
header('Location: index.php');
?>