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
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box-check">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Thành công!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Đã thêm vào giỏ hàng.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
    </div>
</div>

<?php
     include_once("footer.php")
  ?>