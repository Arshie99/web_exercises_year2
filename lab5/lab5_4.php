<?php

function randomPassword($chars) {

    //variables
    $order1 = Array();
    $password = '';

    //arrays for the password makeup
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!$%&*()-+=/?@:;{}[]';

    return substr(str_shuffle($letters), 0 , $chars); // return the generated password
}

echo "The generated password is: ".randomPassword(16)."\n";

?>
