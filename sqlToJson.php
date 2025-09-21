<?php

class sqlToJson {
    // Declaring the Database Variable
    private $db;

    public function __construct($username, $password, $hostname = "localhost", $database) {
        // Building the Connection and returning the Connection Object to the privat Variable
        $this->db = new mysqli($hostname, $username, $password, $database);

        // If an error occures, break the code and print it
        if ($this->db->connect_error) {
            die("Cannot connect to SQL-Server. Error: " . $this->db->connect_error);
        }
    }

    public function request($sql) {
        // Combination of the following Methods to simplify the Command for usage
        return json_encode($this->sqlRequest($sql));
    }

    private function sqlRequest($sql) {
        // Temporary saving the queried SQL Request for later use
        $quicksave = $this->db->query($sql);

        // Generating new Array
        $newObj = array();

        // Pushing every Row/Entry into the generated Array
        while($entry = $quicksave->fetch_assoc()) {
            array_push($newObj, $entry);
        }

        return $newObj; 
    }
}

?>