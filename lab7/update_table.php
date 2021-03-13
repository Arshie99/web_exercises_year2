<?php
include('connect.php');

if(isset($_POST['product']))
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
    echo ('<form action="update_product.php" method="post">');
    echo($row[0]);
    $_SESSION['pid'] = $row[0] ;
    echo("</td><td>");
    echo($row[1]);
    echo("</td><td>");
    echo($row[2]);
    echo("</td><td>");
    echo($row[3]);
    echo("</td><td>");
    echo($row[4]);
    echo("</td><td>");
    echo ('<button type="submit" name="Product"><b>update</b></button>');
    echo ('</form>');
    echo("</tr>\n");
  }
  echo "</table>\n";
  echo ("<button class='button button1' onclick=location='index.html'>homepage</button>");

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
    echo ('<form action="update_user.php" method="post">');
    echo($row[0]);
    echo("</td><td>");
    echo($row[1]);
    echo("</td><td>");
    echo($row[2]);
    echo("</td><td>");
    echo($row[3]);
    echo("</td><td>");
    echo($row[4]);
    echo("</td><td>");
    echo ('<button type="submit" name="User" ><b>Update</b></button>');
    echo ('</form>');
    echo("</tr>\n");
  }
  echo "</table>\n";
  echo ("<button class='button button1' onclick=location='index.html'>Homepage</button>");
}
mysqli_close($db);
?>
