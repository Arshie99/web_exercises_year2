<?php
echo "Table users:\n";
echo '<table border="1">'."\n";
require_once"connect.php";
$result = mysqli_query($db,"SELECT * FROM users");
$result1 = mysqli_query($db,"SELECT * FROM Product");
while ( $row = mysqli_fetch_row($result) )
{
  echo "<tr><td>";
  echo($row[0]);
  echo("</td><td>");
  echo($row[1]);
  echo("</td><td>");
  echo($row[2]);
  echo("</td><td>");
  echo($row[3]);
  echo("</td><td>");
  echo($row[4]);
  echo("</tr>\n");
}
echo "</table>\n";
//--------------------------------------------------------
echo "Table product:\n";
echo '<table border = "1"'."\n";
while ( $row = mysqli_fetch_row($result1) )
{
  echo "<tr><td>";
  echo($row[0]);
  echo("</td><td>");
  echo($row[1]);
  echo("</td><td>");
  echo($row[2]);
  echo("</td><td>");
  echo($row[3]);
  echo("</td><td>");
  echo($row[4]);
  echo("</tr>\n");
}
echo "</table>\n";
mysqli_close($db);
  ?>
