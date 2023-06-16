<?php

header('Content-Type: application/json');
$data = file_get_contents("tsconfig.json");
$products = json_decode($data, true);

echo json_encode($products, JSON_FORCE_OBJECT);

