<?php
function check_if_added_to_cart($con, $item_id, $user_id){
    require 'common.php';
    $query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
    if ($num >= 1) {
        return 1;
    } else {
        return 0;
    }
}
?>
