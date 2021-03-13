<!DOCTYPE html>
<html>
<head>
	<title>product update</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
  <!--html form element-->
  <form class="form-style-7" action="" method="post">
    <h1>Product update Form</h1>
    <ul>
    <li>
        <label for="productname">Product Name</label>
        <input type="text" name="PName" value="<?php include('update_table.php'); echo $pid ?>"maxlength="50">
        <span>Enter the new name of the product</span>
    </li>
    <li>
        <label for="Description">Description</label>
        <textarea name="Description" onkeyup="adjust_textarea(this)"></textarea>
        <span>Brief Description of the Product</span>
    </li>
    <li>
        <label for="Price">Price</label>
        <input type="text" name="Price" maxlength="10">
        <span>Enter new Product Price in the form (11.11)</span>
    </li>
    <li>
        <label for="Stock">Stock</label>
        <input type="number" name="Stock" maxlength="10">
        <span>Please enter new stock Amount</span>
    </li>
        <button type="submit" value="Submit" >Update</button>
        <button type="button" onclick="location='index.html'">Cancel</button>
    </ul>
    </form>

</body>
</html>

<?php
include('connect.php');
if (isset($_POST['PName']) && isset($_POST['Description']) && isset($_POST['Price']) && isset($_POST['Stock']))
{
  $pn = $_POST['PName'];
  $d = $_POST['Description'];
  $p = $_POST['Price'];
  $s = $_POST['Stock'];
  $sql = mysqli_query($db,"UPDATE `product` SET `PName`=$pn,`Description`=$d,`Price`=$p,`Stock`=$s WHERE `ProductID` = $pid");
  echo "Product Successfully updated in the Database!";
  echo ('<button type="button" name="main" onclick=location="index.html"><b>Main Page</b></button>');
  mysqli_query($db,$sql);
}
mysqli_close($db);
?>
