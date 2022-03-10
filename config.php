<?php
$db_server = 'sql304.epizy.com';
$db_name = 'epiz_31199268_db';
$db_user = 'epiz_31199268';
$db_pass = 'Y5WvYOm7EoIwF';

//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
//ühenduse kontroll
if (!$yhendus) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
} else {

}

print_r("I have reached this");
?>
