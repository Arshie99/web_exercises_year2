<?php
include 'header.php';
//variables
$goodmorning = "Have a good morning!";
$goodday = "Have a good day!";
$time = date("H");

if ($time < 10)
{
  echo "$goodmorning<br/>";
} else if ($time < 20)
{
  echo "$goodday<br/>";
}


 ?>
