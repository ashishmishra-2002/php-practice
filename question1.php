<!-- 1. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
Sample Input
1, 2
3, 2
2, 2
Sample Output:
3
5
12 -->

<?php

if(isset($_POST['submit'])){
$num1 = trim($_POST['num1']);
$num2 = trim($_POST['num2']);
$sum = "";
    if(!empty($num1) && !empty($num2)){
        if(preg_match('/^[0-9]$/',$num1) && preg_match('/^[0-9]$/',$num2)){
            if($num1==$num2){
                $sum = $num1+$num2;
                $triple = 3*$sum;
                echo "First Number and Second Number is same: <br>";
                echo "Triple of sum of num1 and num2: ";
                echo " <b>".$triple."</b>";
                }else{
                $sum = $num1+$num2;
                echo "Sum of num1 and num2: ";
                echo " <b>".$sum."</b>";
            }
        }else{
            echo "Please enter Number Only!";
        }
        
    }else{
        echo "Values Not Entered! Please Enter Values!";
    }
}

?>

<!DOCTYPE html>
<html>
<body>
<hr>

<form method="post" action="">
<label for="num1">Enter First Number: </label>
<input type="text" name="num1" placeholder="Enter 1st Number" id=""><br>
<label for="num2">Enter Second Number: </label>
<input type="text" name="num2" placeholder="Enter 2nd Number" id=""><br>
<input type="submit" name="submit" value="Add" id="">
</form>



</body>
</html>
