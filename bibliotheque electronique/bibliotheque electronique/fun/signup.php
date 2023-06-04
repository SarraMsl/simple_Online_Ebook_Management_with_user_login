<?php
include ('../connect.php');
$wusername=$_GET['wusername'];
$wemail=$_GET['wemail'];
$wpassword=$_GET['wpassword'];
$wconfirmpassword=$_GET['wconfirmpassword'];
$sql = "INSERT INTO wuser (wusername , wemail , wpassword ,wrole) 
VALUES('$wusername','$wemail','$wpassword','user')";
$result = $conn->query($sql);
header('location:\bibliotheque electronique\index(2).php')
?>


