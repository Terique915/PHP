<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function Celsius(){
    $a =18;
    echo $a * 1.8 + 32;

}
echo Celsius()."℉ ";

function divideBy( $getal ){
$bool = false;

if ($getal % 3 == 0){
    $bool = true;

}
if($bool == true){
    echo "True";
}
else{
    echo "False";
}

}
echo "<br>".divideBy(21);

function reverse($string){
    echo strrev($string);


}
echo reverse("Ik ben Terique");
?>
</body>
</html>

