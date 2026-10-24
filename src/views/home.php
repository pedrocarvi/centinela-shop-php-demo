<ul>
<?php foreach ($products as $p): ?>
  <li><?= htmlspecialchars($p['name']) ?> — $<?= number_format($p['price'], 2) ?></li>
<?php endforeach; ?>
</ul>
