<?php 
require("config.php");
$db = mysqli_connect($dbhost, $dbuser, $dbpassword);
mysqli_select_db($dbdatabase, $db);



?>