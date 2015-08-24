<?php
define("IMGPATH", "Images/Products/");
define("AUTHERR", "Sorry mate, You dont seem to have the authentication to enter in here");
$dbname="specshop";
$uname="root";
$server="localhost";


$dbconn= mysqli_connect("$server","$uname","","$dbname") or die('Invalid Password');
?>