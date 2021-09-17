<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Product = $_POST["sanpham"];
    $ListPrice = $_POST["gianiemyet"];
    $DiscountPercent = $_POST["tilechietkhau"];
    $DiscountAmount = $ListPrice * $DiscountPercent * 0.1;
    $DiscountPrice = $DiscountAmount + $ListPrice;
    echo "san pham: ".$Product."</br>";
    echo "Luong chiet khau la: ".$DiscountAmount."</br>";
    echo "Gia sau khi da duoc chiet khau la: ".$DiscountPrice;
}