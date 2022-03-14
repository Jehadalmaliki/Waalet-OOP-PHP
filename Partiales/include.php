<?php

include 'Classes/DataBase.php';
$conn = new Database();

include 'Classes/User.php';
include 'Classes/Wallet.php';
include 'Classes/Deposit.php';
include 'Classes/Product.php';
include 'Classes/Withdraw.php';
include 'Classes/Cart.php';


include 'Oprations/product/getAll.php';

include 'Oprations/user/logout.php';

include 'Oprations/cart/getBalance.php';
include 'Oprations/cart/cartOpreation.php';
include 'Oprations/cart/confirmOrder.php';