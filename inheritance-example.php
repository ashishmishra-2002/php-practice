<!DOCTYPE html>
<html>
<body>

<?php

class MyClass{

public $age;

function myFunc($age){

echo $age;
}
}

class MyClass2 extends MyClass{

public $name= "Ashish";
function myFunc2(){

echo $this->name."</br>";
}

}
$myobj = new MyClass2();
$myobj->myFunc(21);
//$myobj->myFunc(21);

?>

</body>
</html>
