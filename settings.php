<?php
require_once 'includes/common.php';
if (!isset($_SESSION['email'])) { 
    header('location: index.php'); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Lifestyle Store</title>
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
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4> Change Password </h4>
                    <form action="settings_sript.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="old-password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="password1" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                    <br>
                    <div>
                    <?php 
                    echo filter_input(INPUT_GET,'error'); 
                    ?>
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