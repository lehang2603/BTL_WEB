<?php
  
    require_once('connection.php');
    require_once('helper.php');

    $keyword = $_GET['keyword']??null;
   
    $list = [];
    $db = DB::getInstance();
    
    $_keyword = '%' . $keyword . '%';
    $queryProduct = $db->prepare('SELECT * FROM products WHERE name LIKE ?');
    $queryProduct->execute([$_keyword]);
    $products = $queryProduct->fetchAll();
?>
<!-- MAIN -->
<main>
    <section>
       
    <div class="header-pay">
        <ul>
            <li><a href="index.php?act=trangchu">Trang chủ </a></li>
            <span> |</span>
            <li>Tìm kiếm</li>
            
        </ul>
       
    </div>
    <div 
        class="make">
            <th>
                <span>Kết quả tìm kiếm với từ khoá "<?php echo $keyword; ?>"</span>
            </th>

    </div>
        <?php
            include_once("./view/incl/arrange.php");
        ?>
    </section>

    <!-- PRODUCT -->
    <section>
        <div class="container-fluid">
            <div class="wrap">
                <div class="row">
                <?php
                 include('view/incl/left_menu.php')
                ?>

                    <div class="rightbox col-md-9">
                        <div class="row">
                           
                                <?php foreach($products as $product) { ?>
                                    <div class="col-md-4 gy-5 gx-2">
                                    <form method="POST" action="addtocart.php">
                                            <div class="product">
                                                <a href="index.php?act=chitietsp&product_id=<?php echo $product['id']?>"> <img src="<?php echo '../BTL_WEB_ADMIN/uploads/'. $product['image'] ?>"></a>
                                                <div class="product-info">
                                                    <a href="" class="product-name"><?php echo $product['name'] ?></a>
                                                    <div class="product-price"><?php echo Helper::currency_format($product['selling_price']); ?>
                                                        <div class="product-action">
                                                            <button class="add-to-cart" name="add_to_cart" >
                                                                <i class="fas fa-shopping-cart"></i> 
                                                            </button>
                                                        </div>
                                                        <input type="hidden" name="img" value="<?php echo '../BTL_WEB_ADMIN/uploads/'. $product['image'] ?>">

                                                        <input type="hidden" name="name" value="<?php echo $product['name'] ?>">
                                                        <input type="hidden" name="price" value="<?php echo $product['selling_price'] ?>">
                                                        <!-- <input type="number" name="quantity" value="1" class="form-control"> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>    
                                    </div>
                                <?php } ?>
                            </form>
                          
                        </div>
                       
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    
</main>
