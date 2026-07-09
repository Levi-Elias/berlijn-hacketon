<?php
require_once 'includes/db.php';

// Haal alle activiteiten op
$stmt = $pdo->query("SELECT * FROM activities ORDER BY id DESC");
$activities = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Berlijn - Activiteiten</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="hero" style="height: 150px; background: linear-gradient(135deg, #071e3d, #1f4287);">
        <img src="https://images.unsplash.com/photo-1577905101037-9753c3e2182b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Activities">
        <div class="hero-content">
            <h1>Activiteiten</h1>
        </div>
    </header>

    <main class="container">
        <div class="card-list">
            <?php if (count($activities) > 0): ?>
                <?php foreach ($activities as $activity): ?>
                    <div class="card">
                        <img src="<?= htmlspecialchars($activity['image']) ?>" alt="<?= htmlspecialchars($activity['title']) ?>" class="card-img">
                        <div class="card-content">
                            <h2 class="card-title"><?= htmlspecialchars($activity['title']) ?></h2>
                            <p><?= htmlspecialchars($activity['description']) ?></p>
                            <div class="card-meta">
                                <span><span class="material-symbols-rounded" style="font-size:18px;">calendar_today</span> <?= htmlspecialchars($activity['date']) ?></span>
                                <span><span class="material-symbols-rounded" style="font-size:18px;">map</span> <?= htmlspecialchars($activity['location']) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Er zijn nog geen activiteiten toegevoegd.</p>
            <?php endif; ?>
        </div>
    </main>

    <?php include 'includes/nav.php'; ?>

</body>
</html>
