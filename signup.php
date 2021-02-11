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
        <title>Signup | Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!--Custom CSS-->
        <link rel="stylesheet" href="style.css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        require 'includes/header.php';
        ?>
        <div id="banner_image" style="margin-top: -75px; text-align: left; color: black">   
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2> Signup </h2>
                        <form action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" required pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                <div>
                                    <?php 
                                    echo filter_input(INPUT_GET,'m1'); 
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <div>
                                    <?php 
                                    echo filter_input(INPUT_GET,'m2'); 
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" name="city" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address" name="address" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                        </form>
                        <div>
                            <p>Already have an account? <a href="login.php">Login</a></p>
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
