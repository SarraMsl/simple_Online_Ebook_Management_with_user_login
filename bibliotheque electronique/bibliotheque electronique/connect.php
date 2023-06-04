<?php

$host = "localhost";
$dbname = "bibliotheque electronique";
$wusername = "root";
$wpassword = '';

$conn = new mysqli(hostname: $host,
                     username: $wusername,
                     password: $wpassword,
                     database: $dbname);
                     
if ($conn->connect_errno) {
  die("Connection error");
}
?>