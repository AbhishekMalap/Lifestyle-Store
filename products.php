<?php
require 'includes/common.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Lifestyle Store</title>
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
        include 'includes/check-if-added.php';
        ?>
        <div id="banner_image" style="margin-top: -75px; text-align: left; color: black">  
        <div class="container" id="content">
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <hr>
            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price:Rs.36000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 1, $_SESSION['id'])) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>   
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon DSLR</h3>
                            <p>Price:Rs.40000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 2, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                } 
                            } 
                            ?>
                        </div>
                    </div>  
                 </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.45000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 3, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                } 
                            } 
                            ?>
                        </div>
                    </div>    
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price:Rs.50000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 4, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price:Rs.13000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 5, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                } 
                            } 
                            ?>
                        </div>
                    </div>  
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/10.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price:Rs.3000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 6, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>    
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/11.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price:Rs.8000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 7, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>  
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/12.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price:Rs.18000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 8, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/8.jpg" alt="">
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price:Rs.800.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 9, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>   
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/6.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price:Rs.1000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 10, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>   
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/13.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price:Rs.1500.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 11, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>   
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/14.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price:Rs.1300.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])){ 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a><p>
                            <?php 
                            }else{ 
                                if (check_if_added_to_cart($con, 12, $_SESSION['id'])){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                }else{ 
                            ?> 
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php 
                                }
                            } 
                            ?>
                        </div>
                    </div>   
                </div>
            </div>
            <hr>
        </div>
        </div>
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>
