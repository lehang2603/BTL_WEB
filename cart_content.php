<?php
require_once('connection.php');

$db = DB::getInstance();

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item_id => $quantity) {

        $queryProduct = $db->query('SELECT * FROM products WHERE id = ' . $item_id);
        $product = $queryProduct->fetch(PDO::FETCH_ASSOC);
        if(!$product){
            continue;
        }
            echo '<div class="item">';
                echo '<img src="../BTL_WEB_ADMIN/uploads/'. $product['image'].'">';
                echo '<div>'.$product['name'].'</div>';
                echo '<div>'.$product['original_price'] * $quantity.' đ</div>';
                echo '<div class="add-dese">
                    <button class="decrement">-</button>
                    <span class="counter">'.$quantity.'</span>
                    <button class="increment">+</button>
                </div>';
            echo '</div>';
    }
} else {
    echo '<p>Giỏ hàng trống.</p>';
}
?>