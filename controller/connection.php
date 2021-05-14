<?php
    function connect(){
        $dbHost= "localhost";
        // here mysql port is 3306
        $dbHost = "localhost";
        $user= "root";
        $pass= "Mishra@2000";
        $dbname="inventory_project";

        // $dbHost = "remotemysql.com";
        // $user= "u96YGvXCdt";
        // $pass= "8lPpENpF7I";
        // $dbname="u96YGvXCdt";
        

        $conn= new mysqli($dbHost, $user, $pass, $dbname);
        //echo "connected";
        return $conn;
    }

    function closeConnect($cn){
        $cn->close();
    }
?>