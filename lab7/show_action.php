<?php
include('connect.php');

if (isset($_POST['product']))
{
  echo '<table border="1">'."\n";
  $result1 = mysqli_query($db,"SELECT * FROM Product");
  echo '<table border = "1"'."\n";
  echo ('<tr><th>');
  echo "Product ID";
  echo ('</th><th>');
  echo "Product name";
  echo ('</th><th>');
  echo "Description";
  echo ('</th><th>');
  echo "Price";
  echo ('</th><th>');
  echo "Stock";
  echo ('</th></tr>');
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
}
if (isset($_POST['user']))
{
  echo '<table border="1">'."\n";
  echo ('<tr><th>');
  echo "User ID";
  echo ('</th><th>');
  echo "Username";
  echo ('</th><th>');
  echo "Password";
  echo ('</th><th>');
  echo "Firstname";
  echo ('</th><th>');
  echo "Lastname";
  echo ('</th></tr>');
  $result = mysqli_query($db,"SELECT * FROM users");
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
}

mysqli_close($db);
?>
