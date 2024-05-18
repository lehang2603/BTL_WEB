<?php
require_once('./model/products.php'); 
include "./view/incl/header.php";


    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'category':
                include "./view/danhmucsp.php";break;
            case 'chitietsp':
                include "./view/chitietsp.php";break;
            case 'login' :
                include "./view/login.php";break;
            case 'register' :
                include "./view/register.php";break;          
            case 'lienhe' :
                include "./view/lienhe.php";break;  
            case 'gioithieu':
                include "./view/gioithieu.php";break;   
            case 'thanhtoan':
                include "./view/thanhtoan.php";break; 
            case 'giohang':
                include "./view/giohang.php";break;  
            case 'doitra':
                include "./view/chinhsach/doitra.php";break;  
            case 'kiemhang':
                include "./view/chinhsach/kiemhang.php";break; 
            case 'thanhtoancs':
                include "./view/chinhsach/thanhtoancs.php";break; 
            case 'vanchuyen':
                include "./view/chinhsach/vanchuyen.php";break; 
            case 'muahang':
                include "./view/chinhsach/muahang.php";break;     
                              
            
                
            default:
                include "./view/trangchu.php";break;
        }
    }else{
        include "./view/trangchu.php";
    }
    
    include "./view/incl/footer.php";
   
?>