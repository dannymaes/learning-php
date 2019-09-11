<?php
session_start();
function openConnection() {

 // Try to figure out what these should be for you

 $dbhost    = "localhost";
 $dbuser    = "root";
 $dbpass    = "m";
 $db        = "becode_genk";

 /*
 $dbhost    = "136.144.221.129";
 $dbuser    = "genk";
 $dbpass    = "{)+O^O@iw!].zmjT";
 $db        = "becode_genk";
*/
 // Try to understand what happens here
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn->error);

 // Why we do this here
 return $conn;
}

// And why would we do this here ?
function closeConnection($conn) {
    $conn->close();
}

?>
