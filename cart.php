  <?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--Custom CSS-->
        <link rel="stylesheet" href="style.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            require 'includes/header.php';
        ?>
        <div id="banner_image" style="margin-top: -75px; text-align: left; color: black">  
        <div class="container-fluid" id="content">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query) or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) { 
                        ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($result)) {
                                $sum += $row["Price"];
                                $id = $row['id'] . ", ";
                                echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?items_id=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                            ?>
                        </tbody>
                        <?php
                        }else {
                           echo "<center class='jumbotron' style='margin-top: 100px; background-color: rgba(0, 0, 0, 0.3);'><h2 style='color:#ff0000;'>Add items to the cart first!</h2><p>Flat 10% OFF on premium brands</p><a href='products.php' class='btn btn-danger btn-lg active'>Shop Now</a></center>"; 
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>
