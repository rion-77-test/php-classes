<?php
echo nl2br("She is \"Mina\". \nHer age is 12.");
echo "<pre>";
echo "\nHe is \"Raju\". \nHis age is 12. \tHe is Mina's brother.";
echo "</pre>";

$name = "Raju";

// Equivalent to JavaScripts template literal;
echo ($name == 'Raju' ? 'Mina' : 'Mithu')." is a good boy";
echo '<br>';
echo "{$name[0]} is a good boy";
?>
<script>
    // alert("A javascript \"escape\" sequence \n here is a new line");
</script>