<!DOCTYPE html>
<html>
<body>

<?php
$fruits = array("apple", "banana", "cherry");

echo count($fruits)."<br>";
echo "Items in array: "."<br>";
$count = 1;
foreach ($fruits as $fruit){

echo $count.". ".strtoupper($fruit)."<br>";
$count++;


}
?>

</body>
</html>
