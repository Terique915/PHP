<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body{
            text-align: center;
        }
        .rood{
            border: red solid 5px;
        }
        .groen{
            border: green solid 5px;
        }
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    for($i = 1; $i <=9;$i++ ) {
         if($i % 2 == 0){
              $class = "class= 'rood'";
         }
         else{
            $class= "class= 'groen'";
    }
        echo "<img ".$class."src='img/dog".$i.".jpg'>";
    }
?>
</body>
</html>
