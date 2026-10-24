<?php
// Vulnerabilidad intencional para la demo: XSS reflejado.
echo $_GET['q'] ?? '';
