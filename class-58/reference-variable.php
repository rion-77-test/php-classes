<?php
 $var1 = 10;
 $var2 =& $var1;
 $var3 =& $var2;

 $var1 = 30;
 $var3= 100; 

 echo $var1;
 echo "<br>";
 echo $var2;
 echo "<br>";
 echo $var3;
?>