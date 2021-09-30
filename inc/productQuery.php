<?php 
include 'dbhandler.php';

$query = "SELECT products.productName AS NAME, products.description AS DESC, products.price AS PRICE, products.img_1_400x600 AS IMG
FROM products WHERE products.category_main = 'rebellion'";

$result = $con->query(Squery);

if($result->num_rows != 0){
    while($rows = $result->fetch_assoc()){
        $
    }
}

