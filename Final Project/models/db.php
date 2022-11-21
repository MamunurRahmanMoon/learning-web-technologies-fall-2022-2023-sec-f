<?php
$host = "localhost";
$dbname = "charity_management";
$dbuser = "root";
$dbpass = "";

    function getConnection(){
       global $host;
       global $dbname;
       global $dbuser;
       global $dbpass;
       
       return $con = mysqli_connect($host, $dbname, $dbuser, $dbpass);
    }

    
?>