<?php
    session_start();
    include_once("tempdatabase.php");
    if(!isset($_GET['pid'])) header("Location: index.php");
    
    if(isset($_POST['btnConfirm'])){
        $_SESSION['cartCount'] += 1;
        $productID = $_GET['pid'];
        $size = $_POST['radSize'];
        $quantity = $_POST['inputQTY'];
        $arrAddCart = array(
            $productID => array(
                'size' => $size,
                'quantity' => $quantity,
            )
        );

        $arrPrevCart = $_SESSION['cartItem'];
        if(iseet($_SESSION['cartItem'])) {
            $_SESSION['cartItems'] = array_merge($arrAddCart, $arrPrevCart);
        }
        else {
            $_SESSION['cartItems'] = array_merge($arrAddCart);
        }

        header("Location: confirm.php");
    }
    else if(isset($_POST['btnCancel'])){
        header("Location: index.php");
    }
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
    <title>Product Detail</title>
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
                        <img class="pic-1" src="./img/<?php echo $arrProducts[$_GET['pid']]['photo1'];?>">
                        <img class="pic-2" src="./img/<?php echo $arrProducts[$_GET['pid']]['photo2'];?>">
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-5 col-12">
                <h4 class="h4 d-inline py-5"><?php echo $arrProducts[$_GET['pid']]['name'];?>
                    <span class="badge badge-dark">₱<?php echo $arrProducts[$_GET['pid']]['price'];?></span>
                </h4>
                <p class="my-3"><?php echo $arrProducts[$_GET['pid']]['description'];?></p>
                <hr>
                <form action="" method="post" class="form-group">
                    <h5>Select Size</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radSize" id="radXS" value="XS" checked><label class="form-check-label pr-4" for="radXS">XS</label>
                        <input class="form-check-input" type="radio" name="radSize" id="radSM" value="SM"><label class="form-check-label pr-4" for="radSM">SM</label>
                        <input class="form-check-input" type="radio" name="radSize" id="radMD" value="MD"><label class="form-check-label pr-4" for="radMD">MD</label>
                        <input class="form-check-input" type="radio" name="radSize" id="radLG" value="LG"><label class="form-check-label pr-4" for="radLG">LG</label>
                        <input class="form-check-input" type="radio" name="radSize" id="radXL" value="XL"><label class="form-check-label pr-4" for="radXL">XL</label>
                    </div>
                    <hr>
                    <h5>Enter Quantity:</h5>
                    <input class="form-control" name="inputQTY" type="number" placeholder="" min="1" max="100" value="1">
                    <div class="my-3">
                        <button name="btnConfirm"class="btn btn-dark">
                            <i class="fa-solid fa-circle-check"></i>
                            Confirm Product Purchase
                        </button>
                        <button name="btnCancel" class="btn btn-danger">Cancel/Go Back</button>
                    </div>
                </form>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>