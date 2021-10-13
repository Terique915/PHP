<?php
    session_start();
    if (isset($_SESSION)){
        echo "<h1>Welkom op de website</h1>";
        echo"<p><a href='Login.php'>loguit</a></p>";
    }
    else{
        header('location:Login.php');
    }