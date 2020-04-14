<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$kappersagenda =array(
 "9.15"=> "Mevrouw Pietersen",
 "9.30"=> "Mevrouw Willems",
 "9.45"=> "",
 "10.00"=>"Paul van de broek",
 "10.15"=>"Karel de Meeuw",
 "10.30"=> ""

);


print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as  $tijd  =>$afspraak) {
   if ($afspraak == "") {
        print("<li>" . $tijd . "</li>");
    }



}
echo "</ul>";
?>
</body>
</html>