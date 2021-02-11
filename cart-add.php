<?php
require 'includes/common.php';

$item_id = filter_input(INPUT_GET,'id');
$user_id = $_SESSION['id'];
    
$query = "INSERT INTO users_items (user_id, item_id, status) VALUES ('$user_id', '$item_id', 'Added to cart')";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: products.php');
?>