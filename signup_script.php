<?php
require 'includes/common.php';

 $name = mysqli_real_escape_string($con, filter_input(INPUT_POST,'name'));
 $email = mysqli_real_escape_string($con, filter_input(INPUT_POST,'email'));
 $password = MD5(mysqli_real_escape_string($con, filter_input(INPUT_POST,'password')));
 $contact = mysqli_real_escape_string($con, filter_input(INPUT_POST,'contact'));
 $city = mysqli_real_escape_string($con, filter_input(INPUT_POST,'city'));
 $address = mysqli_real_escape_string($con, filter_input(INPUT_POST,'address'));

 $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
 $regex_num = "/^[789][0-9]{9}$/";

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con,$query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num != 0){
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
}else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
}else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
}else {
    $query = "INSERT INTO users (email, name, password, contact, city, address) VALUES ('$email', '$name', '$password', '$contact', '$city', '$address')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    header('location: products.php');
}
?>
