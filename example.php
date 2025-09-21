<?php

// Import the Class
require_once("sqlToJson.php");

// Initialize the Class and enter all Information to your MySQL-Server
$stj = new sqlToJson(hostname: "localhost", username: "username", password: "password", database: "database");

// For Example you can print the JSON Text
// This Function only returns a String
echo $stj->request("SELECT * FROM table");

?>