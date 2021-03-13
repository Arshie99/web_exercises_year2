<?php
echo nl2br("Example 1: Equality and identity.\n");
if (123 == "123") print nl2br("Equality 1\n");
if (123 == "100+23") print nl2br("Equality 2\n");
if (FALSE == "0") print nl2br("Equality 3\n");
if ((5 < 6) == "2"-"1" ) print nl2br("Equality 4\n");
if ((5 < 6) === TRUE) print nl2br("Equality 5\n");

echo nl2br("\n\nExample 2: Equality and identity.\n");
$vv = "Hello World!";
echo "First: " . strpos($vv,"Wo") . "<br/>";
echo "Second: " . strpos($vv,"He") . "<br/>";
echo "Third: " . strpos($vv,"ZZ") . "<br/>";

if (strpos($vv,"He") == FALSE) echo nl2br("Wrong A<br/>");
if (strpos($vv,"ZZ") == FALSE) echo nl2br("Wrong B<br/>");
if (strpos($vv,"He") !== FALSE) echo nl2br("Wrong C<br/>");
if (strpos($vv,"ZZ") === FALSE) echo nl2br("Wrong D<br/>");

print_r(FALSE); print FALSE;
echo "Where are they?<br/>";
 ?>
