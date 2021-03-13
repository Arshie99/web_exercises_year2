<?php
$num1 = 13526;
$num2 = 25634;

echo " QUESTION: Is 13526 greater than 25634?";
$result = ($num1 > $num2) ? "That is correct." : "That is not correct.";
echo nl2br("\nAnswer: $result");

echo nl2br("\n\nQUESTION: Is 13526 less than 25634?");
$result = ($num1 < $num2) ? "That is correct." : "That is not correct.";
echo nl2br("\nAnswer: $result");

echo nl2br("\n\nQUESTION: Is 13526 Equal to 25634?");
$result = ($num1 == $num2) ? "That is correct." : "That is not correct.";
echo nl2br("\nAnswer: $result");

 ?>
