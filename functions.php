<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functions</title>
</head>
<body>
    
<?php    
    
// This could be as large as needed. It is called by name on any page that is connected. 
// One can even put function names inside another function to call back that block of code.
    
function init() {
    
calculate();    
    
echo "<br>"; 
    
say_something();           
    
}
    
say_something();
    
function calculate() {
    echo 11 * 11;
}        
    
function say_somthing() {
    echo "Hello, do you like PHP?";
}    
    
?>    
    
</body>
</html>