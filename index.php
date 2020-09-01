<?php
    include_once("header.php");
    include_once("util\DBConnection.php");
   
 ?>
<div class="container-fluid">
    <div class="row product-sec1">
        <?php  getProduct(); ?>
    </div>
    <div class="clearfix"></div>
</div>

<?php
     include_once("footer.php")
  ?>