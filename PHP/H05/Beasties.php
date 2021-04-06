<?php

foreach ($_POST['animal'] as $animal){
    echo "<img src='img/".$animal.".jpg'>";
}
