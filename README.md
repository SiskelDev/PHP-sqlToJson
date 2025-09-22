# PHP-sqlToJson
This is a simplified Function for making SQL Requests and getting them back as JSON Text

# Example
```PHP
// Import the Class
require_once("sqlToJson.php");

// Initialize the Class and enter all Information to your MySQL-Server
$stj = new sqlToJson(hostname: "localhost", username: "username", password: "password", database: "database");

// For Example you can print the JSON Text
// This Function only returns a String
echo $stj->request("SELECT * FROM table");
```

# About this Project
This was a Simple idea of a Friend of mine and i wanted to also publish the idea for everyone that might need it.
