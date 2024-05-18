<?php
 require_once('view/giohang.php');
$html_cart='';
    foreach($_SESSION["giohang"] as $item)
    {
        $tt=$item["sl"]*$item['price'];
        $html_cart.='<tr>
                 <tr>'.$item['img'].'</tr>
                 <tr>'.$item['name'].'</tr>
                 <tr>'.$item['price'].'</tr>
                 <tr>'.$item['sl'].'</tr>
                 <tr>'.$tt.'</tr>
                 <tr>Sửa | Xoá</tr>
                
        </tr>';
    }
?>
<div class="dinhdang">
    <table>
        <tr>
            <th>Hình</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
        </tr>
        <tr>
            <?=$html_cart?>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td>$tong</td>
            <td></td>
        </tr>
    </table>
    <pre>
        <?php
         //echo var_dump()
        ?>
    </pre>
</div>