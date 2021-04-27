<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'aaplekar_handi';
$dbPassword = 'loveyoudad9820102993';
$dbName = 'aaplekar_handicraft';


//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
} 
?>
