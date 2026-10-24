<?php
// Vulnerabilidad intencional para la demo: SQL injection en una búsqueda.
function searchProducts(PDO $db): array
{
    $term = $_GET['q'] ?? '';
    return $db->query("SELECT id, name, price FROM products WHERE name LIKE '%$term%'")->fetchAll(PDO::FETCH_ASSOC);
}
