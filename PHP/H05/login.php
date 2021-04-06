<?php

if ($_POST ['email']== "piet@worldonline.nl"&& $_POST['wachtwoord']=="doetje123") {
    echo "Je moet nog een email invullen";
}
if ($_POST ['email']== "klaas@carpets.nl"&& $_POST['wachtwoord']=="snoepje777") {
    echo "Je moet nog een email invullen";
}
if ($_POST ['email']== "truushendriks@wegweg.nl" && $_POST['wachtwoord']=="arkiearkie201") {
    echo "Je moet nog een email invullen";
}
else{
    echo "geen toegang";
}