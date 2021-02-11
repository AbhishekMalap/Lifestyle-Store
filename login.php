<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) { 
    header('location: products.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Lifestyle Store</title>
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
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i></p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form>
                                <div>
                                    <?php 
                                    echo filter_input(INPUT_GET,'error'); 
                                    ?>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <p>Don't have an account? <a href="signup.php">Register</a></p>
                            </div>
                        </div>
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
