<!-- 2. Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.
Sample Input:
53
30
51
Sample Output:
6
21
0 -->

<?php

$number = '';
define('value', 51);
$value_is_ready = false;

if(isset($_POST['submit'])){
    $number = trim($_POST['number']);
    
    if(!empty($number)){
        if(preg_match('/^\d+$/',$number)){
            $diff = value - $number;
            $value_is_ready = true;
        }else{
            echo "Please enter a number only.";
        }
        
    }
    
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question No. 2</title>
</head>
<body>
    <form method="post" action="" class="">
    <label for="num" class="">Enter a number: </label>
    <input type="text" class="" name="number" placeholder="Enter a number" id="num" required><br>
    <input type="submit" class="" name="submit" required>
    </form>

    <div class="">
        <?php
        if($value_is_ready){
            echo "Absolute value is ".$diff;
        }
        ?>
    </div>
    
</body>
</html>