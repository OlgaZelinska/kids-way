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
    <div class="mini-cart">gfgfgf</div>
    <div class="goods-out"></div>
</main>
