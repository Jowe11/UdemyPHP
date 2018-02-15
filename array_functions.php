<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php    
   
$list = [11, 22, 33, 44, 55, 66, 77, 88, 99];
    
echo max($list); // outputs max number in the array
    
echo "<br>";
    
echo min($list); // outputs minimum number in the array
    
echo "<br>";
    
sort($list); // sorts the array in order
    
print_r($list); // outputs the array with array numbers
    
?>    
    
</body>
</html>