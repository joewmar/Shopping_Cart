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
    <title>Product Remove</title>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="mt-5">
            <h3 class="h3 d-inline mt-5">Pambansang Damit </h3>
            <div class="d-inline float-right ">
            <a href="cart.php" name="btnCart" class="btn btn-primary btn-sm mt-1">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart <span class="badge badge-light"><?php echo (isset($_SESSION['cartCount']) ? $_SESSION['cartCount']: '0');?></span>
                <span class="sr-only">unread messages</span>
            </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-5 col-sm-7 col-12">
                <div class="product-grid2 card">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar4.png">
                            <img class="pic-2" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-5 col-12">
                <h4 class="h4 d-inline py-5">Barong
                    <span class="badge badge-dark">P599.99</span>
                </h4>
                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi delectus autem impedit recusandae iure laudantium nisi voluptatem id cupiditate voluptates labore fugit, minima quasi eligendi quaerat! Ea animi harum non molestias veniam cum est rerum, deleniti eum ullam. Maxime hic nisi debitis consequatur eaque, quaerat dolorum quis labore quia. Doloribus?</p>
                <hr>
                <h5>Select Size: XS</h5>

                <hr>
                <h5>Quantity: 00000</h5>
                <div class="my-3">
                    <button class="btn btn-dark">
                        <i class="fa-solid fa-circle-check"></i>
                        Confirm Product Remove
                    </button>
                    <button class="btn btn-danger">Cancel/Go Back</button>
                </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>