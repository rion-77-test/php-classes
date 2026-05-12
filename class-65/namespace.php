<?php
require_once "lib/user.php";
require_once "classes/user.php";

$userCustom = new custom\User();
echo $userCustom->text();

echo "<br>";
$userLib = new lib\User();
echo $userLib->text();