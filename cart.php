<?php
session_start();
include('Database/cru.php');
$status="";
if (isset($_POST['submit2']) && $_POST['submit2']!=""){
$code = $_POST['submit2'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$pimg = $row['ProductImage'];
$pname = $row['ProductName'];
$price = $row['Price'];


$cartArray = array(
    $code=>array(
    'ProductImage'=>$pimg,
    'ProductName'=>$pname,
    'price'=>$price,

);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
    $status = "<div class='box' style='color:red;'>
    Product is already added to your cart!</div>";    
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
    }

    }
}
?>