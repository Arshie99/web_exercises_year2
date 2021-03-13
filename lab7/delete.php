<!--
@Author: Arshad Shah
@Date:   Thursday, November 5, 2020 2:42 PM
@Email:  C19485866@mytudublin.ie
@Filename: delete.html
@Last modified by:   Arshad Shah
@Last modified time: Thursday, November 5, 2020 2:43 PM
-->

<!DOCTYPE html>
<html>
	<head>
		<title>show the tables</title>
    <link rel="stylesheet" href="style.css">
	</head>

	<body>
		<h1>Show the tables</h1>
    <div class="center_cont">
      <form action="" method="post">
          <button class="button button1" type="submit" name="product" >Show Product Table</button>
          <br>
          <button class="button button2" type="submit" name="user" >Show user Table</button>
      </form>
    </div>
	</body>
</html>

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
    echo ('<form action="delete_a_item.php" method="post">');
    echo ('<button type="submit" name="Product"><b>Remove</b></button>');
    echo ('</form>');
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
    echo("</td><td>");
    echo ('<form action="delete_a_item.php" method="post">');
    echo ('<button type="submit" name="User" ><b>Remove</b></button>');
    echo ('</form>');
    echo("</tr>\n");
  }
  echo "</table>\n";
}

mysqli_close($db);
?>
