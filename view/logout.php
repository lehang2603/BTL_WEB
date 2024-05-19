<?php
session_start();
if(isset($_SESSION['auth_customer']))
{
    unset($_SESSION['auth_customer']);
    unset($_SESSION['auth_customer_user']);
    $_SESSION['message']="dang xuat thanh cong!!";
}
header('Location : ../view/trangchu.php ')
?>