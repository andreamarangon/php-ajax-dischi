<?php
include __DIR__ .'/_partials/data.php';
header('Content-Type: application/json');
echo json_encode([
  "response" => $database,
  "success" => true,
]);
?>
