<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "aaplekar_handi";
$dbPassword = "loveyoudad9820102993";
$dbName     = "aaplekar_handicraft";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>