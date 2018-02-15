<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
  // Associative arrays  
    
$number = array(11, 'Jowe', 'Jess'); // Setting up a "normal" array

print_r($number);    
    
echo $number[0] . '<br>';   // Outputs 22 and concatinated a br tag
    
echo "<br>";   
    
$names = array("first_name" => 'Lochlan', "last_name" => 'Rowe');   // this could be written as: "$names = [-things in array-];"
    
print_r($names); 
    
echo $names['first_name'] . " " . $names['last_name'];
    

    
    
    
?>    
    
    
    
</body>
</html>