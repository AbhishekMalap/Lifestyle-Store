<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$old_pass = MD5(mysqli_real_escape_string($con, filter_input(INPUT_POST,'old-password')));
$new_pass = MD5(mysqli_real_escape_string($con, filter_input(INPUT_POST,'password')));
$new_pass1 = MD5(mysqli_real_escape_string($con, filter_input(INPUT_POST,'password1')));

$query = "SELECT email, password FROM users WHERE email ='".$_SESSION['email']."'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass != $new_pass1) {
    header('location: settings.php?error=<span class="red">The two passwords don\'t match</span>');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE users SET password ='".$new_pass."' WHERE email ='".$_SESSION['email']."'";
        $result = mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=<span class="red">Password Updated</span>');
    }
    else{
        header('location: settings.php?error=<span class="red">Wrong Old Password</span>');
    }
}
?>