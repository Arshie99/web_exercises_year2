<?php
require_once"connect.php";
if ( isset($_POST['UserName']) && isset($_POST['Password']) && isset($_POST['FirstName']) && isset($_POST['LastName']))
{
  $un = $_POST['UserName'];
  $p = $_POST['Password'];
  $fn = $_POST['FirstName'];
  $ln = $_POST['LastName'];
  $sql = "INSERT INTO users (UserID, UserName, Password, FirstName, LastName) VALUES (NULL,'$un', '$p', '$fn', '$ln')";
  echo "<pre>\n $sql \n</pre>\n";
  mysqli_query($db,$sql);
}
mysqli_close($db);
?>
