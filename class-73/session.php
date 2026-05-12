<?php 
session_start();

$_SESSION["id"] = 1; 
$_SESSION["name"] = "Mina"; 
$_SESSION["age"] = "10";

// unset($_SESSION["name"]);
// session_unset();
session_destroy();
?>