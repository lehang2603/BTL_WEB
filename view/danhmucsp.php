<?php
  
    require_once('connection.php');
    require_once('helper.php');

    $categoryId = $_GET['category_id'];
   
    $list = [];
    $db = DB::getInstance();
   
    $queryProduct = $db->query('SELECT * FROM products WHERE category_id = '.$categoryId);
    $products = $queryProduct->fetchAll();
  

    // Category
    $queryCategory = $db->query('SELECT * FROM catagory WHERE id = '.$categoryId);
    $category = $queryCategory->fetchObject();
    $category = (array) $category;

    //
    if(isset($_POST['add_to_cart'])){
        if(isset($_SESSION['cart'])){

        }
        else{
            $session_array=array(
                'id'=> $_GET['id'],
                "name" => $_POST['name'],
                "pricae" =>$_POST['selling_price']
            );

            $_SESSION['cart']=$session_array;
        }
    }
?>
<!-- MAIN -->
<main>
    <section>
       
    <div class="header-pay">
        <ul>
            <li><a href="index.php?act=trangchu">Trang chủ </a></li>
            <span> |</span>
            <li><a href=""><?php echo $category['name']; ?></a></li>
            
        </ul>
       
    </div>
    <div 
        class="make">
            <th>
                <span><?php echo $category['name']; ?></span>
            </th>

    </div>
        <?php
            include_once("./view/incl/arrange.php");
        ?>
        
        <!-- <div class="container">
            <div class="top-make_up">
                <div class="row">
                    <div class="make_up">
                        <a href="index.php?act=trangchu">Trang chủ</a>
                        <span>/</span>
                        <a href="" id="mu"><?php echo $category['name']; ?></a>
                    </div>

                    <div class="make">
                        <th>
                            <span><?php echo $category['name']; ?></span>
                        </th>

                    </div>
                    <?php
                        include_once("./view/incl/arrange.php");
                    ?>
                </div>
            </div>
        </div> -->
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
