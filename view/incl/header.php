<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/./css/makeup.css">
    <link rel="stylesheet" type="text/css" href="./assets/./css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="./assets/./css/main_trangchu.css"> 
   
   
   
    <link rel="stylesheet" type="text/css" href="./assets/./css/footer.css">

    <link rel="stylesheet" type="text/css" href="./assets/./css/lienhe.css"> 
    <link rel="stylesheet" type="text/css" href="./assets/./css/login.css">
    <link rel="stylesheet" type="text/css" href="./assets/./css/register.css">
    <link rel="stylesheet" type="text/css" href="./assets/./css/gt.css">
    <link rel="stylesheet" type="text/css" href="./assets/./css/tt.css">
    <link rel="stylesheet" type="text/css" href="./assets/./css/giohang.css">
    <link rel="stylesheet" type="text/css" href="./assets/./css/chinhsach.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css">

 
    <!-- <link rel="stylesheet" href="./assets/./css/./chitietsp.css"> -->
   
</head>

<body>

    <header>
    <div class="warpper">
        <div class="header-group">
            <div class="header">
                <div class="header-top">
                    <div class="header-contact">
                        <div class="header-phone">  
                            <i class="fa-solid fa-phone"></i>
                            <span class="header-phone-number">0123456789</span>
                        </div>
                        <div class="header-email">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="header-email-text">info@leaves.com.vn</span>
                        </div>
                    </div>
        
                    <div class="header-search">
                        <form action="/BTL_WEB/index.php" class="header-search-box">
                            <input type="hidden" name="act" value="timkiem" >
                            <input type="text" name="keyword" class="search-control" placeholder="Tìm kiếm sản phẩm">
                            <button type="submit" class="search-btn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
        
                    <!-- <div class="header-user">
                        <div class="header-user-icon">
                            <i class="fa-regular fa-circle-user"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
        
                        <div class="header-user-control">
                            <a href="index.php?act=login" class="header-sign-in">Đăng nhập</a> / 
                            <a href="index.php?act=register" class="header-sign-up">Đăng ký</a>
                        </div> 
                    </div> -->
                    <div class="header-user">
                        <div class="header-user-icon" id="userIcon">
                            <i class="fa-regular fa-circle-user"></i>
                        </div>
                        <ul class="dropdown-menu" id="dropdownMenu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?act=login">Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="index.php?act=register">Đăng ký</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="view/logout.php">Đăng xuất</a></li>
                        </ul>
                    </div>
                    
                <script>
                    document.getElementById('userIcon').addEventListener('click', function() {
                        document.getElementById('dropdownMenu').classList.toggle('show');
                    });

                    // Đóng menu khi nhấp ra ngoài
                    window.addEventListener('click', function(e) {
                        if (!document.getElementById('userIcon').contains(e.target) && 
                            !document.getElementById('dropdownMenu').contains(e.target)) {
                            document.getElementById('dropdownMenu').classList.remove('show');
                        }
                    });
                </script>

        
                    <!-- <div class="header-mini-cart">
                        <div class="header_cart-wrap">
                            <a href="index.php?act=giohang"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                      
                    </div> -->
                     <div class="header-mini-cart">
                        <div class="header-cart">
                            <div class="icon-cart">
                                <svg aria-hidden="true" xmlns="fa-solid fa-bag-shopping" fill="none" viewBox="0 0 18 20">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                   
                                </svg>
                               
                                
                            </div>
                            
                        </div >
                    <div class="listProduct"></div>
                        <div class="cartTab">
                            <h1>Cart</h1>
                            <div id="listCart" class="listCart">
                                <?php include './cart_content.php'; ?>
                            </div>
                            <div class="btn">
                                
                                <button class="close">Close</button>
                                <button>Checkout</button>
                            </div>
                        </div>
                    </div>
                    
                     <script>
                    document.addEventListener('DOMContentLoaded', function () {
                    const iconCart = document.querySelector('.icon-cart');
                    const listCart = document.querySelector('.listCart');
                    const cartTab = document.querySelector('.cartTab');
                    const closeCartBtn = document.querySelector('.close');

                    iconCart.addEventListener('click', function () {
                        document.body.classList.toggle('showCart');
                    });
                    closeCartBtn.addEventListener('click', function () {
                        document.body.classList.remove('showCart');
                    });
                 
                   
                });
    </script>        
                    </div>
                </div>

            <div class="header-bottom">
                <div class="header-bottom-main">
                    <div class="header-logo">
                        <a href="/index.php?act=trangchu">
                            <img src="./assets/logo.png" alt="">
                        </a>
                    </div>
        
                    <div class="header-menu">
                        <ul class="header-menu-list">
                            <li class="menu-item">
                                <a href="index.php?act=trangchu" class="menu-item-link">
                                    trang chủ
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="index.php?act=gioithieu" class="menu-item-link">
                                    giới thiệu
                                </a>
                            </li>
                           
                            
                            <li class="menu-item">
                                <a href="index.php?act=thanhtoan" class="menu-item-link">
                                    thanh toán
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="index.php?act=lienhe" class="menu-item-link">
                                    contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        

        </div>
        </header>
        