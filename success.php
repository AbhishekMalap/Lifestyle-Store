<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) { 
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=$user_id";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>success | Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
        <div class="container-fluid " id="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <center>
                        <h3>Your order is confirmed. Thank you for shopping with us.</h3>
                        <p>Click <a href="products.php">here</a> to purchase any other item.</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>