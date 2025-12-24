<?php
$data = json_decode(file_get_contents("php://input"), true);
include('include/config.php');
foreach ($data as $track) {
  $sql = "UPDATE products SET sort = ".$track['position']." WHERE id = ".$track['id'];
  $conn->query($sql);
}

echo json_encode(["success" => true]);

?>