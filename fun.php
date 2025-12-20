<?php 

include('admin/include/config.php');

exit; die();

    $pro = [];
    $sql = 'select `id`,`product_name` from `products` order by `id` desc';
	$result = $conn->query($sql); 
    if ($result->num_rows > 0) { 
        while ($row = $result->fetch_assoc()) { 
            $sql1 ="UPDATE `products` SET `product_name` = '".trim($row['product_name'])."' WHERE `products`.`id` = '".$row['id'] ."';";
		    $conn->query($sql1); 
			$pro[] = $row;
        }
		pd($pro);
    }




?>