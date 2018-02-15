<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Values From Functions</title>
</head>
<body>
    
<?php
    
function addNumbers($number1, $number2) {
    $sum = $number1 + $number2;
    return $sum;
}      
    
$result = addNumbers(11, 22);    
    
echo $result;  
    
echo "<br>";    
    
$result = addNumbers(33, $result);
    
echo $result;    
    
?>    
    
</body>
</html>