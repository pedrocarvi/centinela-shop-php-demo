<?php
$pdo = new PDO(getenv('DATABASE_DSN'), getenv('DB_USER'), getenv('DB_PASS'), [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);
