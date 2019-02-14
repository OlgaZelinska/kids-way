<?php
$itemId = $_GET['itemId'];
if(isset($_COOKIE['basket']))
   $basket = $_COOKIE['basket'];
else
   $basket = array();
$basket[] = $itemId;
setcookie("basket", $itemId, time() + (86400 * 30), "/");
echo 'success!';
?>
<main>
    <div class="mini-cart">Sbasket</div>
    <div class="goods-out"></div>
</main>
