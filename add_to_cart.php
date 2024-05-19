<?php
include './connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $item_id = $data['item_id']??0;
    $quantity = $data['quantity']??0;

    $quantity = (int)$quantity;

    if ($quantity > 0) {
        if (isset($_SESSION['cart'][$item_id])) {
            $_SESSION['cart'][$item_id] += $quantity;
        } else {
            $_SESSION['cart'][$item_id] = $quantity;
        }
    }

    ob_start();
    include 'cart_content.php';
    $cart_html = ob_get_clean();
    
    echo json_encode(['status' => 'success', 'cart_html' => $cart_html]);
} else {
    echo json_encode(['status' => 'error']);
}
?>
