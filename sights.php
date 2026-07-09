<?php
require_once 'includes/db.php';

// Haal alle bezienswaardigheden op
$stmt = $pdo->query("SELECT * FROM sights ORDER BY id DESC");
$sights = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Berlijn - Bezienswaardigheden</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="hero" style="height: 150px;">
        <img src="https://images.unsplash.com/photo-1599946347371-68eb71b16afc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sights">
        <div class="hero-content">
            <h1>Bezienswaardigheden</h1>
        </div>
    </header>

    <main class="container">
        <div class="card-list">
            <?php if (count($sights) > 0): ?>
                <?php foreach ($sights as $sight): ?>
                    <div class="card">
                        <img src="<?= htmlspecialchars($sight['image']) ?>" alt="<?= htmlspecialchars($sight['title']) ?>" class="card-img">
                        <div class="card-content">
                            <span class="card-category"><?= htmlspecialchars($sight['category']) ?></span>
                            <h2 class="card-title"><?= htmlspecialchars($sight['title']) ?></h2>
                            <p><?= htmlspecialchars($sight['description']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Er zijn nog geen bezienswaardigheden toegevoegd.</p>
            <?php endif; ?>
        </div>
    </main>

    <?php include 'includes/nav.php'; ?>

</body>
</html>
