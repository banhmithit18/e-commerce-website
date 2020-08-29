<?php
    function OpenConnection(){
        try{
            $serverName = "(local)";
            $connectionInfo = array("Database"=>"bankeygame","UID"=>"sa","PWD"=>"123456"); // remember to change database name
            $conn = sqlsrv_connect($serverName, $connectionInfo);
            if ($conn)
            {
                //echo "Connection established";
                return $conn;
            }
            else
            {
                echo "Connection could not be established.</br>";
                die(print_r(sqlsrv_errors(),true));
            }

        }catch(Exception $e)
        {
            echo "Error";
        }return null;
    }
function Create($item ){
    try{
        $conn = OpenConnection();
        $tableName = get_class($item); // get class name
        $query = "INSERT INTO $tableName (";
        $fields  = get_object_vars($item);
        $class = new ReflectionClass($tableName);
        $properties = $class->getProperties(); // get class properties
        foreach ($properties as $property) {
            // skip inherited properties
            if ($property->getDeclaringClass()->getName() !== $class->getName()) {
              continue;
            }
    
            $classProperties[] = $property->getName();
          }
        
        foreach($classProperties as $columnitem)
        {
            $query .= $columnitem .",";

        }
        $query = substr($query,0,strlen($query)-1);
        $query .= ") VALUES(";
        foreach($fields as $fileditem)
        {
            if (is_string($fileditem))
            {
                $query .= "'$fileditem'".",";
            }
            else
            {
                $query .= $fileditem.",";
            }
        }
        $query = substr($query,0, strlen($query) -1);
        $query .= ")";
        $check = sqlsrv_query($conn,$query);
        if ($check == 0)
        {
            echo "that bai";
        }
        else{
            echo "thanh cong";
        }

    }
    catch (Exception $e)
    {
        echo("Error");
    }
}
function getProduct(){
    $conn = OpenConnection();
	$query = "SELECT DISTINCT TOP 12 product.productid,productname,productprice,productdiscountstatus,productdiscountprice,productstatus FROM product ";
	$getProducts = sqlsrv_query($conn,$query);
	while($row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC))
	{
		$productid = $row['productid'];
		$productName = $row['productname'];
		$productPrice = $row['productprice'];
		$productDiscountStatus = $row['productdiscountstatus'];
		$productDiscountPrice = $row['productdiscountprice'];
        $productStatus = $row['productstatus'];
        $queryGetImg ="SELECT TOP 1 imgname FROM img WHERE productid = $productid";
        $getImg = sqlsrv_query($conn,$queryGetImg);
        if ($rowGetImg = sqlsrv_fetch_array($getImg,SQLSRV_FETCH_ASSOC))
        {
            $imgName = $rowGetImg['imgname'];
        }
        

		echo "<div class=\"col-md-3 product-men\">
		<div class=\"men-pro-item simpleCart_shelfItem\">
			<div class=\"men-thumb-item\">
				<img src=\"uploads/$imgName\" alt=\"\">
				<div class=\"men-cart-pro\">
					<div class=\"inner-men-cart-pro\">
						<a href=\"single.html\" class=\"link-product-add-cart\">Quick View</a>
					</div>
				</div>
				<span class=\"product-new-top\">New</span>
			</div>
			<div class=\"item-info-product \">
				<h4>
					<a href=\"single.html\">$productName</a>
				</h4>";
				if($productDiscountStatus == 1)
				{
				echo		
				"<div class=\"info-product-price\">
					<span class=\"item_price\">$productDiscountPrice VND</span>
					<del>$productPrice VND</del>
				</div>";
				}
				else
				{
				echo		
				"<div class=\"info-product-price\">
					<span class=\"item_price\">$productPrice VND</span>
				</div>";
				}
		echo   		
				"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out\">
					<form action=\"#\" method=\"post\">
						<fieldset>
							<input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
							<input type=\"hidden\" name=\"add\" value=\"1\" />
							<input type=\"hidden\" name=\"business\" value=\" \" />
							<input type=\"hidden\" name=\"product_id\" value=\"$productid\" />
							<input type=\"hidden\" name=\"product_name\" value=\"$productName\" />
							<input type=\"hidden\" name=\"product_price\" value=\"$productPrice\" />
							<input type=\"hidden\" name=\"discount_status\" value=\"$productDiscountStatus\" />
							<input type=\"hidden\" name=\"discount_price\" value=\"$productDiscountPrice\" />
							<input type=\"hidden\" name=\"product_status\" value=\"$productStatus\" />
							<input type=\"hidden\" name=\"currency_code\" value=\"VND\" />
							<input type=\"hidden\" name=\"return\" value=\" \" />
							<input type=\"hidden\" name=\"cancel_return\" value=\" \" />
							<input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
						</fieldset>
					</form>
				</div>
	
			</div>
		</div>
	</div>";
	}
}

 

   
 ?>