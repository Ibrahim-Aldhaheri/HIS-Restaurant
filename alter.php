<?php
$id = $_POST['inputID'] ;
$newRole = $_POST['selectRole'] ;

include 'config.php';
$stmt = $conn->prepare("UPDATE users SET user_type = '$newRole' WHERE users.id = '$id'");
$stmt->execute();


header("Location:AdminPanel.php");
