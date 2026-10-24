<?php
// Vulnerabilidad intencional para la demo: inyección de comandos.
function exportReport(): ?string
{
    $file = $_GET['file'] ?? '';
    return shell_exec("tar czf /tmp/shop-export.tgz reports/" . $file);
}
