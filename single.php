
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
<div class="footer-mid">
    <div class="container-fluild" id="footer-mid">
        <div class="container col-9 centerPage" id="container-col-footer">
            <div class="row" id="row-footer-mid">
                <div class="col-sm" style="display: inline-flex; padding-top: 29px;">
                    <div style="padding-top: 3px;">
                        <img src="images/service1.png" alt="">
                    </div>
                    <div>
                        <span style="font-size:12px;font-weight:bold;text-transform:uppercase;">GIAO HÀNG SIÊU
                            TỐC</span>
                        <p style="font-size:12px; color: black;">Hệ thống giao hàng tự động chỉ trong 3 phút.</p>
                    </div>
                </div>
                <div class="col-sm" style="display: inline-flex; padding-top: 29px;">
                    <div style="padding-top: 3px;">
                        <img src="images/service2.png" alt="">
                    </div>
                    <div>
                        <span style="font-size:12px;font-weight:bold;text-transform:uppercase;">BẢO HÀNH NHANH
                            CHÓNG</span>
                        <p style="font-size:12px; color: black;">Mọi yêu cầu hỗ trợ sẽ được đội ngũ tư vấn giải quyết
                            trực tiếp.</p>
                    </div>
                </div>
                <div class="col-sm " style="display: inline-flex; padding-top: 29px;">
                    <div style="padding-top: 3px;">
                        <img src="images/service3.png" alt="">
                    </div>
                    <div>
                        <span style="font-size:12px;font-weight:bold;text-transform:uppercase;">UY TÍN 5 SAO</span>
                        <p style="font-size:12px; color: black;">Được cộng đồng bình chọn là shop game úy tín nhất VN.
                        </p>
                    </div>
                </div>
                <div class="col-sm" style="display: inline-flex; padding-top: 29px;">
                    <div style="padding-top: 3px;">
                        <img src="images/service4.png" alt="">
                    </div>
                    <div>
                        <span style="font-size:12px;font-weight:bold;text-transform:uppercase;">HỖ TRỢ TẬN TÌNH</span>
                        <p style="font-size:12px; color: black;">Hệ thống hỗ trợ online liên tục từ 8h - 24h.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="container-footer-bottom">
    <div class="container col-10 centerPage" id="footer-bottom">
        <div class="col-sm" id="col-sm-fb" style="padding-left: 40px;">
            <span id="font-fb">DIVINESHOP</span>
            <br>
            <div id="div-link-fb">
                <a href="# " id="link-fb">Game bản quyền là gì ?</a><br>
                <a href="#" id="link-fb">Giới thiệu Divine Shop</a> <br>
                <a href="#" id="link-fb">Điều khoản dịch vụ</a> <br>
                <a href="#" id="link-fb">Chính sách bảo mật</a> <br>
                <a href="#" id="link-fb">Donate nhân viên CSKH</a>
            </div>
        </div>
        <div class="col-sm" id="col-sm-fb">
            <span id="font-fb">TÀI KHOẢN</span>
            <br>
            <div id="div-link-fb">
                <a href="# " id="link-fb">Giỏ hàng</a><br>
                <a href="#" id="link-fb">Sản phẩm đã mua</a> <br>
                <a href="#" id="link-fb">Đăng kí</a> <br>
                <a href="#" id="link-fb">Đăng nhậpt</a> <br>
                <a href="#" id="link-fb">Chế độ bảo hành</a>
            </div>
        </div>
        <div class="col-sm-4" id="col-sm-fb">
            <span id="font-fb" >LIÊN HỆ</span>
            <br>
            <div id="div-link-fb">
                <a href="# " id="link-fb">Địa chỉ giao dịch trực tiếp</a><br>
                <p id="link-fb" style=" color:black;">Hotline: <a href="#" id="link-fb">1900 633 305 - 0373847371</a></p>
                <p id="link-fb" style=" color:black;">Email: hotro@divineshop.vn</p>
                <a href="#" id="link-fb">Fanpage</a> <br>
            </div>
        </div>
        <div class="col-sm" id="col-sm-fb">
        </div>


    </div>
</div>
<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- ajax -->
	<script>
		// $(document).ready(function(){
		// 	$(".product-detail").click(function(e) {
		// 	e.preventDefault(); // avoid to execute the actual submit of the form.
		// 	var id =event.srcElement.id;
		// 	var mydata = $('#form'+id).serialize();
			
		// 	$.ajax({
       	// 	type: "POST",
        // 	url: "index.php",
        // 	data: mydata
      	// 		});
		// 	});
		// })
	</script>

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- imagezoom -->
	<script src="js/imagezoom.js"></script>
	<!-- //imagezoom -->

	<!-- FlexSlider -->
	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails",
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- flexisel (for special offers) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>