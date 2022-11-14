<?php
    session_start();
    include_once("tempdatabase.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/shopping-cart-custom.css">
    <title>Shopping Cart</title>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="mt-5">
            <h3 class="h3 d-inline mt-5">Pambansang Damit </h3>
            <div class="d-inline float-right ">
                <a href="./cart.php" name="btnCart" class="btn btn-primary btn-sm mt-1">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Cart <span class="badge badge-light"><?php echo (isset($_SESSION['cartCount']) ? $_SESSION['cartCount']: '0');?></span>
                    <span class="sr-only">unread messages</span>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <!-- Product 1 -->
            <?php
                foreach($arrProducts as $key => $valueItem):
            ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid2 card mb-5">
                            <div class="product-image2">
                                <a name="btnDetails" href="./detail.php?pid=<?php echo $key;?>">
                                    <img class="pic-1" src="./img/<?php echo $arrProducts[$key]['photo1'];?>">
                                    <img class="pic-2 h-100" src="./img/<?php echo $arrProducts[$key]['photo2'];?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title d-inline"><?php echo $arrProducts[$key]['name'];?>
                                    <span class="badge badge-dark">₱<?php echo $arrProducts[$key]['price'];?></span>
                                </h3>
                            </div>
                        </div>
                    </div>
            <?php            
                endforeach;
            ?>
    </div>

   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>