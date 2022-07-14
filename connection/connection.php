<?php

    function connect() {
        $servername = "localhost";
        $username = "root";
        $password = "delaroca2310";
        $database = "practice";
    
        $con = new mysqli($servername, $username, $password, $database);
    
        if ($con -> error) {
            die ("Connection Error" . $con -> error);
        }
        else {
            return $con;
            // echo "Connected";
        }
    }

?>