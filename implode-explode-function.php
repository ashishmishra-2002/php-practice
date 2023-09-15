<!DOCTYPE html>
<html>
<body>

<?php
$str = "Hello world. It's a beautiful day.";
//explode() - converts string into array.
$words = explode(" ",$str);
print_r ($words);
echo "<br>";

//implode() - use to print array(first it convert it to string then print using seperator).
echo implode(", <br>",$words);

?> 

</body>
</html>
