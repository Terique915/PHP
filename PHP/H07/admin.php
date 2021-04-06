<?php


session_start();
if (! empty($_SESSION["user"] && $_SESSION['user']['rol'] == "Admin")){
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op de admin website</h1>";
    echo"<p><a href='Login.php'>login</a></p>";

}
else{
    header('location:Login.php');
}


