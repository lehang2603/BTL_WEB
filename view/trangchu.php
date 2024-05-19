<?php
    require_once('connection.php');
    require_once('helper.php');

  
    $list = [];
    $db = DB::getInstance();
   $req = $db->query('SELECT * FROM products WHERE showhome=1' );
?>

   <!-- MAIN -->
   <main>
       
    <section class="top-main">
        <div class="container-fluid">
            <div class="row">


                <div class="col-3 gx-3 bars" >
                   <div class="row  ">
                        <ul class="menu">
                            <li><a href=""><i class="fa-solid fa-bars"></i></a></li>
                            <li >MENU</li>
                        </ul>
                   </div>



                   <div class="row  ">

                   <div class="menu">
                        <ul class="list">
                            <li><a href="index.php?act=category&category_id=1" > MAKE UP</a></li>
                            <li> <a href="index.php?act=category&category_id=3" >BODY CARE</a></li>
                            <li> <a href="index.php?act=category&category_id=2" > SKIN CARE</a></li>
                            <li ><a href="index.php?act=category&category_id=4" >GIFT SET</a></li>
                            <li ><a href="" >SALE</a></li>
                        </ul>
                    </div>
                   </div>
                </div>


                <div class="col-9  "style="background-color:#F4B8BE; ">
                    <div class="slider">
                        <div class="slider-container">
                            <div class="slider-list">
                                <div class="slider-item">
                                    <img src="./assets/pic/pic_slide/pic_1.jpg" alt="" class="slider-img">
                                </div>
                                <div class="slider-item">
                                    <img src="./assets/pic/pic_slide/pic_2.jpg" alt="" class="slider-img">
                                </div>
                                <div class="slider-item">
                                    <img src="./assets/pic/pic_slide/pic_3.jpg" alt="" class="slider-img">
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        const sliderList = document.querySelector('.slider-list');
                        const sliderItems = document.querySelectorAll('.slider-item');
                        let currentIndex = 0;
                        const lengthItems = sliderItems.length - 1;
                        let refreshSlider = setInterval(() => {
                            if(currentIndex + 1 > lengthItems) {
                                currentIndex = 0;
                                } else {
                                    currentIndex++;
                                }
                                reloadSlider();
                        }, 5000);
                        function reloadSlider() {
                            let checkLeft = sliderItems[currentIndex].offsetLeft;
                            sliderList.style.left = -checkLeft + 'px';
                            clearInterval(refreshSlider);
                            refreshSlider = setInterval(() => {
                                if(currentIndex + 1 > lengthItems) {
                                currentIndex = 0;
                                } else {
                                    currentIndex++;
                                }
                                reloadSlider();
                            }, 5000);
                        }  
                    </script> 
                </div>

            </div>
        </div>
    </section>   

   <section id="wrapper">
    <div class="container">
        <div class="headline">
            <h2>&mdash; SẢN PHẨM &mdash;</h2>
        </div>
        <div class="row">
            <?php foreach($req->fetchAll() as $product) { ?>
                <div class="col-md-3 boxsp">
                    <div class="product">
                        <a href="index.php?act=chitietsp&product_id=<?php echo $product['id']?>"> <img src="<?php echo '../BTL_WEB_ADMIN/uploads/'. $product['image'] ?>"></a>
                        <div class="product-info">
                            <a href="" class="product-name" title="<?php echo $product['name'] ?>"><?php echo $product['name'] ?></a>
                            <div class="product-price"><?php echo Helper::currency_format($product['selling_price'])?>
                                <div class="product-action">
                                    <button class="add-to-cart" onclick="addToCart(<?php echo $product['id'] ?>, 1)">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            <?php } ?>
            
        </div>    
    </div>
   </section>
   <section class="container">
        <div class="title-heading">
            <h2 class="h2">GÓC KIẾN THỨC</h2>
        </div>
        <div class="navtab">
            <p class="navtab-active">Góc nhỏ chia sẻ kiến thức về làm đẹp cùng Leaves</p>
        </div>
        <div class="project">
            <div class="project-products">
                <div class="section">
                    <div class="box">
                        <img src="img/serum.jpg">
                        <div class="contentt">
                            <h3>Serum Da Dầu Mụn Không Thể Bỏ Qua</h3>
                            <p>💦 Thời tiết miền bắc thì thất thường, miền nam thì đã nắng nóng 😭 Mùa mà tuyến dầu nhờn hoạt động mạnh, các bạn da dầu mụn đã bắt đầu lo lắng chuẩn bị rồi 💪 Chúng tớ đã có sẵn “tiểu đội” serum hùng mạnh không thể bỏ qua vào mùa hè này đây</p>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="box">
                        <img src="img/kcn.jpg">
                        <div class="contentt">
                            <h3>Chống nắng nâng tone hè năm 2024</h3>
                            <p>🌻 Nắng tới rồi, tập trung tìm kem chống nắng thôi. Tiêu chí đầu tiên là chống nắng tốt, thứ 2 là mỏng mịn và finish rạng rỡ. Vậy hãy để Leaves gợi ý cho bạn TOP những dòng chống nắng Hàn có tất cả những điều trên và được yêu thích nhất. </p>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="box">
                        <img src="img/skincare.jpg">
                        <div class="contentt">
                            <h3>Skincare "Lười" cho những ngày giao mùa</h3>
                            <p>Lazy Skincare - phương pháp ra đời “cổ vũ”, bình thường hóa việc đôi khi mình “lười” dưỡng da. Đôi khi trong cuộc sống nhiều áp lực, điều duy nhất chúng ta cần là được thảnh thơi, làn da và cơ thể cùng được nghỉ ngơi. Từ tâm hồn nhẹ nhàng cũng sẽ thể hiện thật rạng rỡ ra làn da.</p>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="box">
                        <img src="img/makeup.webp">
                        <div class="contentt">
                            <h3>Má Tone Cam Phải Thử Trong năm 2024</h3>
                            <p>✨ Makeup má phiên bản tone cam đã có rồi đây bạn ơi. Có thể nói Cam là 1 màu cực dễ dùng và gần như hợp với mọi tone da, dù da bạn thuộc undertone và sắc độ nào cũng có thể sử dụng được. Vì vậy mà bất cứ sản phẩm má nào cũng có ít nhất 1 màu cam. Tone này cũng sẽ giúp tổng thể gương mặt ấm áp, đồng đều hơn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
   
    <section class="about" >
        <h1 class="heading"><span>About </span>Leaves</h1>
        <div class="row">
            <div class="img-container">
                <img src="img/about.png">
            </div>
            <div class="contentt">
                <h2>Tại sao lại chọn chúng tôi? </h2>
                <p>Chúng mình là Leaves, một cửa hàng mỹ phẩm tại Hà Nội ra đời từ 2003, và luôn mang trong mình một ước mơ to bự là được đồng hành cùng các cậu trên con đường chăm sóc và yêu thương bản thân để trở nên xinh đẹp hơn mỗi ngày! </p>
                <p>"Best Beauty Product" - Slogan mà Leaves luôn giữ vững để mang đến cho khách hàng những sản phẩm tốt nhất, dịch vụ tận tình nhất và đặc biệt hơn cả là niềm vui, là sự trân trọng trước sự ủng hộ và tin tưởng của các quý khách hàng. </p>
                <a href="#" class="btn">Learn more</a>
            </div>

        </div>
    </section>
 
   
    <section class="review" >
        <h1 class="heading">Customer's <span>review</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Tôi cảm thấy tin tưởng và an tâm khi mua sắm tại trang web này, và sẽ giới thiệu cho bạn bè của tôi.</p>
                <div class="user">
                    <img src="img/rv1.jpg" alt="">
                    <div class="user-infor">
                        <h3>Lan Hương</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Dịch vụ và hỗ trợ khách hàng rất tận tình và nhanh chóng, làm tôi cảm thấy hài lòng.</p>
                <div class="user">
                    <img src="img/rv2.jpg" alt="">
                    <div class="user-infor">
                        <h3>Yến Vy</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Tôi đã tìm thấy các sản phẩm yêu thích của mình và sẽ tiếp tục mua sắm tại đây trong tương lai.</p>
                <div class="user">
                    <img src="img/rv3.jpg" alt="">
                    <div class="user-infor">
                        <h3>Hồng Nhung</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Quá trình đặt hàng và thanh toán diễn ra suôn sẻ, tiết kiệm thời gian và công sức.</p>
                <div class="user">
                    <img src="img/rv4.jpg" alt="">
                    <div class="user-infor">
                        <h3>Ngọc Hiền</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>
        </div>
    </section>
   
    
   </main>
   


   <!-- FOOTER -->
