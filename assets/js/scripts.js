function addToCart(itemId, quantity) {
    fetch('add_to_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ item_id: itemId, quantity: quantity })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            document.getElementById('listCart').innerHTML = data.cart_html;
        } else {
            alert('Có lỗi xảy ra.');
        }
    });
}

function removeFromCart(itemId) {
    fetch('remove_from_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ item_id: itemId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert('Đã xóa sản phẩm khỏi giỏ hàng.');
            location.reload();
        } else {
            alert('Có lỗi xảy ra.');
        }
    });
}

function updateCart(itemId, quantity) {
    fetch('update_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ item_id: itemId, quantity: quantity })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert('Đã cập nhật giỏ hàng.');
        } else {
            alert('Có lỗi xảy ra.');
        }
    });
}
