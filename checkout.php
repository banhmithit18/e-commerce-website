<?php
    include_once("header.php");
    include_once("util\DBConnection.php");
    ?>

<?php 
    $count = 1;
    echo "<div class=\"trang-sp\">\n";
echo "    <!-- php o day-->\n";
echo "    <div class=\"container\">\n";
echo "        \n";
echo "        <!-- php o day-->\n";
echo "        <div class=\"container-title\">\n";
echo "            <h2 class=\"thanh-toan-title\">Giỏ Hàng</h2><span class=\"count-san-pham\"></span>\n";
echo "            <!-- php o day ne-->\n";
echo "            <div class=\"sort\">\n";
echo "                <a href=\"index.php\">\n";
echo "                    <div class=\"btn btn-aqua-bg\">Tiếp tục mua hàng</div>\n";
echo "                </a>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "        <hr>\n";
echo "\n";
echo "        <form action=\"\" method=\"post\" id=\"form-san-pham\" enctype=\"multipart/form-data\">\n";
echo "\n";
echo "            <div class=\"thanh-toan-container\">\n";
echo "\n";
echo "                <div class=\"contaier\">";
    $total =0;
 foreach($_POST as $key)
 {
    if(isset($_POST['quantity_'.$count]))
    {
        $productname = $_POST['item_name_'.$count];
        $quantity = $_POST['quantity_'.$count];
        $price = $_POST['amount_'.$count];
        $imgName = getProductValue("imgname",$productname);
        $productid = getProductValue("productid",$productname);
        $productStatus = getProductValue("productstatus",$productname);
        $index =  $count;
        $count++;
        
        
        echo "  <div class=\"row cart-detail\">
        <div class=\"col-sm-3 col-xs-3\">
            <a href=\"single.php?product_id={$productid}\" target=\"_blank\">
                <img class=\"portrait-crop\"
                    src=\"uploads/$imgName\">
            </a>
        </div>
        <div class=\"col-sm-5 col-xs-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-10 col-xs-10\">
                        <a href=\"single.php?product_id={$productid}\" target=\"_blank\"
                            class=\"title\">$productname</a>
                        <br>
                    </div>

                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">";
                    if($productStatus == 1)
                    {
                    echo"
                        <div class=\"item-status\">Tình trạng: <span class=\"con-hang\">Còn hàng</span>
                        </div>";
                    }
                    else
                    {
                        echo"
                        <div class=\"item-status\">Tình trạng: <span class=\"het-hang\">Hết hàng</span>
                        </div>";
                    }
        
                    echo"    <span style=\"font-size: 16px;margin-bottom: 5px;font-weight: bold;\">$price
                            VNĐ</span><br>
                        <div class=\"mt-1\">

                            <button id=\"minicartk-checkout\" type =\"button\" class=\"minicartk-remove\" data-minicartk-indx=\"$count\" style=\"color:red;\">Xóa</button> 

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class=\"col-sm-auto mx-auto\">";
        
           /*<button class='down_count btn plusminus' title='Down'><i class=\"fas fa-plus\"></i></button>*/ /* tam thoi chua nghi ra */ 
        
           echo"    <input class='counter text-center' type=\"text\" placeholder=\"value...\" value='$quantity' />";
            
          /* <button class='up_count btn plusminus' title='Up'><i class=\"fas fa-minus\"></i></button>*/ /* tam thoi chua nghi ra */
       
       echo"    </div>
    </div>
    <br>";
        $total += $quantity * $price; 
    }
 }
 echo "  </div>\n";
 echo "                <br>\n";
 echo "            </div>\n";
 echo "        </form>\n";
 echo "    </div>\n";
 echo "    <br>\n";
 echo "\n";
 echo "\n";
 echo "    <hr>\n";
 echo "    <div class=\"container thanh-toan border-sanpham\">\n";
 echo "        <h4 class=\"panel-title\"><strong>THÔNG TIN THANH TOÁN</strong></h4>\n";
 echo "        <div class=\"row\">\n";
 echo "            <div class=\"col-3 text-gray\"> Tổng tiền sản phẩm</div>\n";
 echo "            <div class=\"col-2 thanh-tien\"> $total đ</div>\n";
 echo "        </div>\n";
 echo "        <div class=\"row\">\n";
 echo "            <div class=\"col-3 text-gray\"> Thưởng tiền (Vip Đồng)</div>\n";  /* lay thong tin dang nhap*/
 echo "            <div class=\"col-2 thanh-tien\"> 0đ</div>\n";
 echo "        </div>\n";
 echo "        <div class=\"row\">\n";
 echo "            <div class=\"col-3 text-gray\"> Số dư hiện tại</div>\n"; /*lay thong tin dang nhap*/
 echo "            <div class=\"col-2 thanh-tien\"> 0đ</div>\n";
 echo "        </div>\n";
 echo "        <div class=\"row\">\n";
 echo "            <div class=\"col-3 text-gray\"> Số tiền cần nạp</div>\n";
 echo "            <div class=\"col-2 thanh-tien\">0đ</div>\n";
 echo "        </div>\n";
 echo "    </div>\n";
 echo "    <br>\n";
 echo "    <div class=\"container\">\n";
 echo "        <div class=\"row\">\n";
 echo "        <div class=\"buttons clearfix\">\n";
 echo "        <div class=\"float-left\"><a href=\"index.php\" class=\"btn btn-default\">Tiếp tục mua hàng</a></div>\n";
 echo "        <div class=\"float-right\"><a href=\"\"\n";
 echo "                class=\"btn btn-primary\">Thanh toán</a></div>\n";
 echo "    </div>\n";
 echo "        </div>\n";
 echo "    </div>\n";
 echo "    \n";
 echo " \n";
 echo "</div>\n";
 echo "\n";
 echo "<br>";
 
 ?>



<?php
     include_once("footer.php")
?>