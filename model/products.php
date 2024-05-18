<?php
require_once('connection.php'); 


function showsp($cate_id)
{
    
    $db = DB::getInstance();

  
    $sql = "SELECT * FROM products WHERE 1";

  
    if ($cate_id > 0) {
        $sql .= " AND category_id = " . $cate_id;
    }

 
    $sql .= " ORDER BY id DESC";

   
    $result = $db->query($sql);

  
    if ($result) {
      
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Tên sản phẩm: " . $row['name'] . "<br>";
            echo "Giá: " . $row['selling_price'] . "<br>";
            echo "<hr>"; 
        }
    } else {
      
        echo "Không có sản phẩm nào!";
    }
}
?>
