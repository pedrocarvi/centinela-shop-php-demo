<?php
require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/products.php';

$products = listProducts($pdo);
include __DIR__ . '/../src/views/home.php';
