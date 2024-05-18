<main>
       
       <section class="top-main">
           <div class="container-fluid">
               <div class="row">
   
   
                   <div class="col-3 gx-3 bars" >
                      <div class="row  ">
                           <ul class="menu">
                               <li><a href=""><i class="fa-solid fa-bars"></i></a></li>
                               <li >SẢN PHẨM</li>
                           </ul>
                      </div>
                      <?php
                         include_once("./view/incl/left_menu.php");
                     ?>
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
               <h2>&mdash; WHAT'S NEW &mdash;</h2>
           </div>
           <div class="row">
               <?php foreach($req->fetchAll() as $product) { ?>
                   <div class="col-md-3">
                   <div class="product">
                   <a href=""> <img src="<?php echo $product['image'] ?>"></a>
                   <div class="product-info">
                               <a href="" class="product-name" title="<?php echo $product['name'] ?>"><?php echo $product['name'] ?></a>
                               <div class="product-price"><?php echo Helper::currency_format($product['price']) ?>
                                   <div class="product-action">
                                       <button class="add-to-cart">
                                           <i class="fas fa-shopping-cart"></i>
                                       </button>
                                   </div>
                               </div>
                           </div>
                   </div>
                   </div>
               <?php } ?>
               
           </div>
   
           <div class="headline">
               <h2>&mdash; BEST SELLERS &mdash;</h2>
           </div>
           <div class="row">
               <div class="col-md-3">
                   <div class="product">
                      <a> <img src="./assets/./pic/pic_what_new/pic_5_b.jpg"></a>
                      
                      <div class="product-info">
                           <a href="" class="product-name">La RochePosat Essence Retinol B3 Serum 30ml</a>
                           <div class="product-price">830.000₫
                               <div class="product-action">
                                   <button class="add-to-cart">
                                       <i class="fas fa-shopping-cart"></i> <!-- Icon "cart" -->
                                   </button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-3">
               <div class="product">
                  <a> <img src="./assets/./pic/pic_what_new/pic_6_b.jpg"></a>
                 
                  <div class="product-info">
                           <a href="" class="product-name">’Oreal Paris Extraordinary Oil Sublime Sleek Shampoo 440m</a>
                           <div class="product-price">410.000₫
                               <div class="product-action">
                                   <button class="add-to-cart">
                                       <i class="fas fa-shopping-cart"></i> <!-- Icon "cart" -->
                                   </button>
                               </div>
                           </div>
                   </div>
               </div>
               </div>
               <div class="col-md-3">
               <div class="product">
                  <a> <img src="./assets/pic/pic_what_new/pic_7_b.jpg"></a>
                 
                  <div class="product-info">
                           <a href="" class="product-name">Too Faced  Born This Way The Natural Eye Shadow Palette 12G</a>
                           <div class="product-price">880.000₫
                               <div class="product-action">
                                   <button class="add-to-cart">
                                       <i class="fas fa-shopping-cart"></i> <!-- Icon "cart" -->
                                   </button>
                               </div>
                           </div>
                   </div>
               </div>
               </div>
               <div class="col-md-3">
               <div class="product">
                  <a> <img src="./assets/pic/pic_what_new/pic_8_b.png"></a>
                 
                  <div class="product-info">
                           <a href="" class="product-name">LA ROCHE-POSAY LOTION APAISANTE 200ML</a>
                           <div class="product-price">385.000₫
                               <div class="product-action">
                                   <button class="add-to-cart">
                                       <i class="fas fa-shopping-cart"></i> <!-- Icon "cart" -->
                                   </button>
                               </div>
                           </div>
                   </div>
               </div>
               </div>
           </div>
       </div>
       </div>
   
       
      </section>
      </main>