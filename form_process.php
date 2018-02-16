<?php

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $names = ["Jowe", "Jess", "Lizzy", "So", "Yoko", "Anika", "Piper", "Lochlan"];
    $minimum = 4;
    $maximum = 10;
    
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

?>