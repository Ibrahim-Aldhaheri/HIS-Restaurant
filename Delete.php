<?php
$id=$_POST['inputID'] ;


include 'config.php';
$stmt = $conn->prepare("DELETE FROM `product` WHERE `product`.`id` = '$id'");
$stmt->execute();


header("Location:AdminPanel.php");