<?php
//LOCALLY ON MAMP/WAMP/LAMP:
//Database host name
$dbHostname = "localhost";
//Database user name
$dbUsername = "root";
//Database password
$dbPassword = "root";
//Database name
$dbName = "chem233applet";
/*
//REMOTELY ON COSMOS:
//Database host name
$dbHostname = "localhost";
//Database user name
$dbUsername = "chem233min";
//Database password
$dbPassword = "password";
//Database name
$dbName = "chem233Applet";
*/
//Connect to the database
//Use the object "$mysqli" from now on when accessing the database
$mysqli = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbName);
if ($mysqli->connect_errno) {
    echo "Connect failed: " . $mysqli->connect_error;
    exit();
}
?>