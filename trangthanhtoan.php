<?php
    include_once("header.php")
 ?>


<div class="alert alert-danger alert-cart">Sản phẩm <strong>Fall Guys: Ultimate Knockout</strong> không đủ hàng
            trong kho. Vui lòng chọn lại. Số lượng tối đa: 462 <button type="button" class="close"
                data-dismiss="alert">&times;</button>
        </div>
        <div id="alert-position"></div>
<div class="trang-sp">
    <!-- php o day-->
    <div class="container">
        
        <!-- php o day-->


        <div class="container-title">
            <h2 class="thanh-toan-title">Giỏ Hàng</h2><span class="count-san-pham">(10199 sản phẩm)</span>
            <!-- php o day ne-->
            <div class="sort">
                <a href="index.php">
                    <button class="btn btn-aqua-bg">Tiếp tục mua hàng</button>
                </a>
            </div>
        </div>
        <hr>

        <form action="" method="post" id="form-san-pham" enctype="multipart/form-data">

            <div class="thanh-toan-container">

                <div class="contaier">
                    <div class="row cart-detail">
                        <div class="col-sm-3 col-xs-3">
                            <a href="https://divineshop.vn/fall-guys-ultimate-knockout" target="_blank">
                                <img class="portrait-crop"
                                    src="https://steamcdn-a.akamaihd.net/steam/apps/1097150/header.jpg">
                            </a>
                        </div>
                        <div class="col-sm-5 col-xs-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-10 col-xs-10">
                                        <a href="https://divineshop.vn/fall-guys-ultimate-knockout" target="_blank"
                                            class="title">Fall Guys:
                                            Ultimate Knockout</a>
                                        <br>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="item-status">Tình trạng: <span class="con-hang">Còn hàng</span>
                                        </div>
                                        <span style="font-size: 16px;margin-bottom: 5px;font-weight: bold;">187.000
                                            VNĐ</span><br>
                                        <div class="mt-1">

                                            <a href="" onclick="cart.remove('3256989');" style="color:red;">Xóa</a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-auto mx-auto">
                            <button class='down_count btn plusminus' title='Down'><i class="fas fa-plus"></i></button>
                            <input class='counter text-center' type="text" placeholder="value..." value='0' />
                            <button class='up_count btn plusminus' title='Up'><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <br>
                    

                </div>
                <br>
            </div>
        </form>
    </div>
    <br>


    <hr>
    <div class="container thanh-toan border-sanpham">
        <h4 class="panel-title"><strong>THÔNG TIN THANH TOÁN</strong></h4>
        <div class="row">
            <div class="col-3 text-gray"> Tổng tiền sản phẩm</div>
            <div class="col-2 thanh-tien"> 1.907.286.000đ</div>
        </div>
        <div class="row">
            <div class="col-3 text-gray"> Thưởng tiền (Vip Đồng)</div>
            <div class="col-2 thanh-tien"> 1.907.286.000đ</div>
        </div>
        <div class="row">
            <div class="col-3 text-gray"> Số dư hiện tại</div>
            <div class="col-2 thanh-tien"> 1.907.286.000đ</div>
        </div>
        <div class="row">
            <div class="col-3 text-gray"> Số tiền cần nạp</div>
            <div class="col-2 thanh-tien"> 1.907.286.000đ</div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
        <div class="buttons clearfix">
        <div class="float-left"><a href="index.php" class="btn btn-default">Tiếp tục mua hàng</a></div>
        <div class="float-right"><a href="https://divineshop.vn/index.php?route=checkout/checkout"
                class="btn btn-primary">Thanh toán</a></div>
    </div>
        </div>
    </div>
    
 
</div>

<br>


<?php
     include_once("footer.php")
  ?>