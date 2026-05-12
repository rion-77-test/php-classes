<?php
// try {
//     if(isset($_GET['name'])) {
//         echo $_GET['name'];
//     } else {
//         throw new Exception("Name not found");
//     }
//     // getFunction();
//     // echo "Hello world";
// } catch (Exception $e) {
//     // echo $e->getMessage();
//     echo "Exception";
//     echo "<pre>";
//     print_r($e);
//     echo "</pre>";
// } finally {
//     echo "<br>finally";
// }
// error_reporting(E_WARNING | E_NOTICE | E_PARSE);
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_error', 1);
ini_set('error_log', 'error.log');

echo $name;
test();
