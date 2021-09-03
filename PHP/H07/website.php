<?php
    session_start();
    if (isset($_SESSION["Gebruiker"])){
        echo "<h1>Welkom ".$_SESSION["Gebruiker"]["naam"]. " op de website</h1>";
        echo"<p><a href='Login.php'>login</a></p>";
    }
    else{
        header('location:Login.php');
    }