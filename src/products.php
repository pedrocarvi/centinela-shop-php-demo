<?php
function listProducts(PDO $db): array
{
    $stmt = $db->prepare('SELECT id, name, price FROM products WHERE active = 1 ORDER BY name');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProduct(PDO $db, int $id): ?array
{
    $stmt = $db->prepare('SELECT id, name, price FROM products WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
}
