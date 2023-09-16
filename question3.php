<!-- 3. Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
Sample Input:
30, 0
25, 5
20, 30
20, 25
Sample Output:
bool(true)
bool(true)
bool(true)
bool(false) -->

<?php

$num1 = "";
$num2 = "";
$sum = "";

function check_value($num1,$num2){
   
    if(!empty($num1) and !empty($num2)){
        if(preg_match('/\d/',$num1) and preg_match('/\d/',$num2)){
            $sum = $num1 + $num2;
        if($num1 == 30 or $num2 == 30) {
            return true;
        }elseif($sum == 30){
            return true;
        }else{

            return false;
        }
        }else{
            echo "Please enter a number only.";
        }
        
    }else{
        return false;
        // echo "Please enter a number";
    }
    
}

if(isset($_POST['submit'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
// if(preg_match('/\d/',$num1) and preg_match('/\d/',$num2)){
    check_value($num1,$num2);
// }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question No. 3</title>
</head>
<body>
    <form action="" method="post" class="">
        <input type="text" name="num1" class="" placeholder="Enter num1" required>
        <input type="text" name="num2" class="" placeholder="Enter num1" required>
        <input type="submit" name="submit">
        <?php
        if(check_value($num1,$num2)){
            echo "<b>True</b>";
        }else{
            echo "<b>False</b>";
        }
        ?>
    </form>
</body>
</html>