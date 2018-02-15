<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php
    
// keeps one from having to write multiple if statements
    
$number = 11;
    
switch($number) {
    case 34:
        echo "is it 34";
    break;
    case 35:
        echo "is it 34";
    break;    
    case 36:
        echo "is it 34";
    break;    
    case 37:
        echo "is it 34";    
    break;
    case 10:
        echo "it is 10";
        
    default:
        echo "we could not find anything";
}
    
    
?>    
    
</body>
</html>