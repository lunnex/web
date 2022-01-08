<?php 
session_start();
$_SESSION["isAuthorized"] = 0;
$_SESSION["isAdmin"] = 0;
header("Location: index.php");
					exit();
?>
