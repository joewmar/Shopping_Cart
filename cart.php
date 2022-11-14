<?php
    session_start();
    include("tempdatabase.php");

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
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="mt-5 ">
            <h3 class="h3 d-inline mt-5">Pambansang Damit </h3>
            <div class="d-inline float-right ">
            <a href="cart.php" name="btnCart" class="btn btn-primary btn-sm mt-1">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart <span class="badge badge-light"><?php echo (isset($_SESSION['cartCount']) ? $_SESSION['cartCount']: '0');?></span>
                <span class="sr-only">unread messages</span>
            </a>
            </div>
        </div>
        <!-- Tables -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="table-responsive">
                    <?php if(isset($_SESSION['cartCount'])): ?>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Size</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-right">Price</th>
                                    <th scope="col" class="text-right">Total</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="w-25" src="./img/<?php echo $arrProducts[$_SESSION[$CartKey]['id']]['photo1']?>" /> </td>
                                    <td><?php echo $arrProducts[$_SESSION[$CartKey]['id']]['name']?></td>
                                    <td><?php echo $_SESSION[$CartKey]['size']?></td>
                                    <td><input class="text-center" class="form-control text-center" type="number" min="1" max="100" value="<?php echo $_SESSION[$CartKey]['quantity'];?>" /></td>
                                    <td >₱ <?php echo $arrProducts[$_SESSION[$CartKey]['id']]['price'];?></td>
                                    <td class="text-right"><?php echo ($arrProducts[$_SESSION[$CartKey]['id']]['price'] * $_SESSION[$CartKey]['quantity']);?></td>
                                    <td class="text-right"><a class="btn btn-sm btn-danger" href="remove-confirm.php"><i class="fa fa-trash"></i> </a> </td>
                                </tr>
                                <?php foreach($_SESSION['cartItems'] as $CartKey => $CartValue):?>
                                <tr>
                                    <td>asdfsadfad</td>
                                    <td></td>
                                    <td><strong>Total</strong></td>
                                    <td class="text-center"><?php echo $_SESSION[$CartKey]['quantity'];?></td>
                                    <td class="text-right">----</td>
                                    <td class="text-right"><strong>₱ 2400.00</strong></td>
                                    <td class="text-center">----</td>

                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                <!-- Footer button -->
                <div class="col mb-2">
                    <div class="row">
                        <div class="col-sm-12  col-md-4">
                            <a href="index.php" class="btn btn-block btn-danger">
                                <i class="fa-solid fa-bag-shopping"></i>
                                Continue Shopping
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-4 text-center">
                            <button class="btn btn-block btn-success">
                                <i class="fa-solid fa-pen-to-square"></i>                          
                                Update Cart
                            </button>
                        </div>
                        <div class="col-sm-12 col-md-4 text-right">
                            <a href="clear.php" class="btn btn-lg btn-block btn-info">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                Checkout
                            </a>
                        </div>
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