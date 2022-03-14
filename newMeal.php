<?php
$mealName =$_POST['mealName'] ;
$mealPrice =$_POST['mealPrice'] ;
$mealQuantity =$_POST['mealQuantity'] ;
$mealPic =$_POST['mealPic'] ;
$mealPic = "image/".$mealPic ;
$pruductCode = $_POST['pruductCode'] ;


include 'config.php';
$stmt = $conn->prepare("INSERT INTO product (id, product_name, product_price, product_qty, product_image, product_code) VALUES (NULL, '$mealName', '$mealPrice', '$mealQuantity', '$mealPic', '') ");
$stmt->execute();


header("Location:AdminPanel.php");

