<?php
// Checking if the submit button has been clicked and information has been submitted
// POST is a super global variable
// PHP if statement will be run first
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $names = ["Jowe", "Jess", "Lizzy", "So", "Yoko", "Anika", "Piper", "Lochlan"];
    $minimum = 4;
    $maximum = 10;
    
//    echo "Hello " . $username . "!" . "<br>";
//    echo "Your password is " . $password . "<br>";
    if(strlen($username) < $minimum) {
        echo "Username has to be more than 5 characters.";
    }
    
    if(strlen($username) > $maximum) {
        echo "Username cannot be longer than 10 characters.";
    }
    
    if(in_array($username, $names)) {
        echo "Welome!";
    } else {
        echo "You are not allowed!";
    }
}


// the action attribute below is set to come back to this page

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms in PHP</title>
</head>
<body>
   
   <form action="form.php" method="post">
       <input type="text" name="username" placeholder="Enter Username">
       <input type="password" name="password" placeholder="Enter Password">
       <br>
       <input type="submit" name="submit">
   </form>   
    
</body>
</html>