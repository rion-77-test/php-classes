<?php 
//   include "file1.php";
//   include("file2.php");
//   include_once "file1.php";
//   include_once("file2.php");

  include_once "file.php";
  echo "------------------------------------------------------------------------------------After include------------------------------------------------------------------------------------------------------------";
  echo"<br>";
  require_once("file2.hp");
  echo "After require";

   echo $name;
   echo"<br>";
   echo $age;
?>