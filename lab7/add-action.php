<?php
include('connect.php');
if ( isset($_POST['PName']) && isset($_POST['Description']) && isset($_POST['Price']) && isset($_POST['Stock']))
{
  $pn = $_POST['PName'];
  $d = $_POST['Description'];
  $p = $_POST['Price'];
  $s = $_POST['Stock'];
  $sql = "INSERT INTO product (ProductID, PName, Description, Price, Stock) VALUES (NULL, '$pn', '$d', '$p', '$s')";
  echo "Product Successfully Added to the Database!";
  echo ('<button type="button" name="main" onclick=location="index.html"><b>Main Page</b></button>');
  mysqli_query($db,$sql);
}
mysqli_close($db);
?>
