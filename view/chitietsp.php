<?php
 include "./view/incl/header_chitiet.php";
 require_once('connection.php');
 require_once('helper.php');

 $productId = $_GET['product_id'];
 $list = [];
 $db = DB::getInstance();
 $queryProduct = $db->query('SELECT * FROM products WHERE id = '.$productId);
 $products = $queryProduct->fetchAll();
 $products = (array) $products;

 //Img_product
 $queryImageProduct= $db->query('SELECT * FROM img_products WHERE id_products='.$productId);
 $ImageProduct = $queryImageProduct->fetchAll();
 $ImageProduct = (array) $ImageProduct;


?>
    <section>
            <div class="top-make_up">
                    <div class="row">
                    <?php foreach($products as $pro) { ?>
                        <div class="make_up">
                            <a href="index.php?act=trangchu">Trang chủ</a>
                            <span>|</span>
                            <a href="" id="mu" ><?php echo $pro['name']; ?></a>
                        </div>
                    </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class="row gx-3">

                <div class="col">
                    <div class="right-box">

                        <div class="main-image-box">
                            <img src="<?php echo '../BTL_WEB_ADMIN/uploads/'. $pro['image'] ?>" id="bigImage" class="main-image">
                        </div>
                        <div class="small-image">
                            <div class="image-box">
                                <img src="<?php echo '../BTL_WEB_ADMIN/uploads/'. $pro['image'] ?>" class="image" onclick="updateMainImage(this)">
                            </div>
                            <?php foreach($ImageProduct as $_image): ?>
                                <div class="image-box">
                                    <img src="<?php echo '../BTL_WEB_ADMIN/uploads/'. $_image['image'] ?>" class="image" onclick="updateMainImage(this)">
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <script>
                    function updateMainImage(clickedImage) {
                        var mainImage = document.getElementById("bigImage");
                        mainImage.src = clickedImage.src;
                    }
                </script>

                <div class="col">

                    <div class="left-box">
                        <h3><?php echo $pro['name'] ?></h3>
                        <div class="ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h4><?php echo Helper::currency_format($pro['selling_price']); ?> </h4>

                        <p><?php echo $pro['description'] ?></p>

                        <div class="add-dess">
                            <button class="decrement">-</button>
                            <button class="counter">1</button>
                            <button class="increment">+</button>
                            <p>Còn lại <?php echo $pro['quantity'] ?> sản phẩm trong kho</p>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const counterButton = document.querySelector('.add-dess .counter');
                                const decrementButton = document.querySelector('.add-dess .decrement');
                                const incrementButton = document.querySelector('.add-dess .increment');

                                decrementButton.addEventListener('click', function() {
                                    let currentValue = parseInt(counterButton.textContent);
                                    if (currentValue > 1) {
                                        counterButton.textContent = currentValue - 1;
                                    }
                                });

                                incrementButton.addEventListener('click', function() {
                                    let currentValue = parseInt(counterButton.textContent);
                                    counterButton.textContent = currentValue + 1;
                                });
                            });
                        </script>
                        <div class="btn-box">
                            <button class="cart-btn">Add to Cart</button>
                            <button class="buy-btn">Buy Now</button>
                            </div>
                    </div>

                </div>

            </div>
        </div>
        <script>
            function img(anything) {
            document.querySelector('.slide').src = anything;
            }

            function change(change) {
            const line = document.querySelector('.home');
            line.style.background = change;
            }
        </script>
        <div class="row">
            <div class="name">
                GIỚI THIỆU SẢN PHẨM <br>
            </div>
            <div class="picture">
                <img src="./assets/./pic/./pic_chitietsp/intro3.png" alt="intro3" >
            </div>
            <div class="detail">
                <?php echo $pro['introduce'] ?>
            </div>
            <div class="mota">
                ĐẶC ĐIỂM <br>
            </div>
            <div class="detail">
                <?php echo $pro['tips'] ?>
            </div>
            <div class="picture1">
                <img src="./assets/./pic/./pic_chitietsp/intro3.png" alt="intro3" >
            </div>
           
            <?php } ?>


        </div>
    </section>


