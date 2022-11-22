<?php
    session_start();
    include("tempdatabase.php");
    $amount = 0;
    $itemQTYCount = 0;
    $itemID = 0;
    $itemSize = "";
    $itemQty = 0;
    $itemTotal = 0;


    if(isset($_POST['btnUpdate'])){
        for($count = 0; $count < $_SESSION['cartCount']; $count++){
            echo 'for loop here';
            $_SESSION['cartItems'][$count]['qty'] = $_POST['numQTY' . $count . ''];
            
        }
        echo 'Okay naman yun update';

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
    <link rel="stylesheet" href="css/shopping-cart-custom.css">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="mt-5 ">
            <h3 class="h3 d-inline mt-5">Pambansang Damit </h3>
            <div class="d-inline float-right ">
            <a href="cart.php" name="btnCart" class="btn btn-primary btn-sm mt-1">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart <span class="badge badge-light"><?php echo count($_SESSION['cartItems'])?></span>
                <span class="sr-only">unread messages</span>
            </a>
            </div>
        </div>
        <!-- Tables -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="table-responsive">
                    <?php if(count($_SESSION['cartItems']) != 0): ?>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">Product</th>
                                    <th scope="col" class="text-center">Size</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th scope="col" class="text-center">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION['cartItems'] as $CartKey => $CartValue):
                                        $itemID = $_SESSION['cartItems'][$CartKey]['id'];
                                        $itemSize =  $_SESSION['cartItems'][$CartKey]['size'];
                                        $itemQty = $_SESSION['cartItems'][$CartKey]['qty'];
                                        $itemTotal = $arrProducts[$itemID]['price'] * $itemQty;
                                        $amount += $itemTotal;
                                        $itemQTYCount += $itemQty;

                                ?>
                                    <tr>
                                        <td><img style="width: 2em" src="./img/<?php echo $arrProducts[$itemID]['photo1']?>"/></td>
                                        <td><?php echo $arrProducts[$itemID]['name']?></td>
                                        <td class="text-center"><?php echo $itemSize;?></td>
                                        <td class="text-center"><input class="text-center" name="numQTY<?php echo $CartKey?>" class="form-control text-center" type="number" min="1" max="100" value="<?php echo $itemQty;?>"></td>
                                        <td class="text-center" >₱ <?php echo $arrProducts[$itemID]['price'];?></td>
                                        <td class="text-center">₱ <?php echo $itemTotal;?></td>
                                        <td class="text-center"><a class="btn btn-sm btn-danger" href="remove-confirm.php?cartno=<?php echo $CartKey ;?>&qt=<?php echo $itemQty;?>"><i class="fa fa-trash"></i> </a> </td>
                                    </tr>
                                <?php endforeach;?>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center"><strong>Total</strong></td>
                                    <td class="text-center"><?php echo $itemQTYCount;?></td>
                                    <td class="text-center">----</td>
                                    <td class="text-center"><strong>₱ <?php echo $amount;?></strong></td>
                                    <td class="text-center">----</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Footer button -->
                <div class="col mb-2">
                    <div class="row">
                        <form class="form-inline w-100" method="post">
                            <div class="col-sm-12  col-md-4">
                                <a href="index.php" class="btn btn-block btn-danger">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    Continue Shopping
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <button name="btnUpdate" href="cart.php" name ="clickUpdate" class="btn btn-block btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>                          
                                    Update Cart
                                </button>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="clear.php" href="clear.php" class="btn btn-lg btn-block btn-info">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    Checkout
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            <?php else: ?> 
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Product</th>
                            <th scope="col" class="text-center">Size</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th scope="col" class="text-right">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cart is Empty</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-sm-12  col-md-4">
                    <a href="index.php" class="btn btn-block btn-danger">
                        <i class="fa-solid fa-bag-shopping"></i>
                        Continue Shopping
                    </a>
                </div>


            <?php endif; ?>  
            
        </div>
    </div>
                                
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    

</body>
</html>