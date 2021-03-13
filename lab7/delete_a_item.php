<?php
include('connect.php');
if(isset($_POST['product']) && isset($_POST['ProductID']))
{
  $pid = $_POST['ProductID'];
  $sql= "DELETE FROM product WHERE ProductID = $pid LIMIT 1";
  // $stmt = $db->prepare($sql);
  // $stmt->bind_param("i", $pid);
  // $stmt->execute();
  echo "Product deleted successfully";
  echo ('<button type="button" name="main" onclick=location="index.html"><b>Main Page</b></button>');
  mysqli_query($db,$sql);
  // to avoid reposting on refresh and changing or deleting data
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
  }
}

//
// elseif(isset($_POST['User']))
// {
//   $sid = $_POST[$row[0]];
//   $sql= "DELETE FROM users WHERE UserID = ? LIMIT 1";
//   $stmt = $db->prepare($sql);
//   $stmt->bind_param("i", $sid);
//   $stmt->execute();
//   echo "User deleted selected successfully";
//   echo ('<button type="button" name="main" onclick=location="index.html"><b>Main Page</b></button>');
//   mysqli_query($db,$sql);
//   // to avoid reposting on refresh and changing or deleting data
//   if ($_SERVER['REQUEST_METHOD'] == 'POST')
//   {
//     $_SESSION['postdata'] = $_POST;
//     unset($_POST);
//     header("Location: ".$_SERVER['PHP_SELF']);
//     exit;
//   }
// }
mysqli_close($db);
?>
