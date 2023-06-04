<?php
session_start();
session_unset();
session_destroy();
header("location:/bibliotheque electronique/login.php");

exit();
?>
