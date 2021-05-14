<?php
    function connect(){
        // $dbHost= "localhost";
        // // here mysql port is 3306
        // $dbHost = "localhost";
        // $user= "root";
        // $pass= "Mishra@2000";
        // $dbname="inventory_project";

        $dbHost = "remotemysql.com";
        $user= "HGxxzEUaw3";
        $pass= "zHH7UDqrQU";
        $dbname="HGxxzEUaw3";
        

        $conn= new mysqli($dbHost, $user, $pass, $dbname);
        //echo "connected";
        return $conn;
    }

    function closeConnect($cn){
        $cn->close();
    }
?>