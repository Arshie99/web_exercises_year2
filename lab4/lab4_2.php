<?php
include 'header.php';
//array
$num = array(1,2,3,5,6);
$sequence = array(5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90);
$seq = 0;
$seq2 = 0;

//while loop
while ($seq <= 7)
{
    echo "The number is: " . $sequence[$seq] . "<br/>";
  $seq++;
}

echo "<br/><br/>";
//do while
do
{
  echo "The number is: $sequence[$seq2] <br/>";
  $seq2++;
} while ($seq2 <= 7);
 ?>
