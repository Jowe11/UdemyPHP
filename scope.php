<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Variables and Scope</title>
</head>
<body>
    
<?php  
  
$x = "outside"; // global scope
    
function convert() {
    $x = "inside"; // local scope
    global $x;
}    
    
echo $x; // outputs global value without the word global inside the function
    
echo "<br>";
    
convert(); // Now, this converts the global into the variable that is inside the function    
    
    
?>    
    
</body>
</html>