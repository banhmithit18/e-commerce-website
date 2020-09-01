
<?php

use function PHPSTORM_META\elementType;

if(isset($_GET['product_id']))
{
    $id = $_GET['product_id'];
}
include_once("header.php");
include_once("util\DBConnection.php");
?>
<?php 
if(isset($id))
{
getSingleProduct($id);
}
else
{
    header("location:index.php");
}
?>
<?php include_once("footer.php");?>