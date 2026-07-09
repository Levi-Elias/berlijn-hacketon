<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Berlijn - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .admin-nav {
            background: var(--card-bg);
            padding: var(--spacing-md);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .admin-nav a {
            color: var(--accent-blue);
            text-decoration: none;
            font-weight: 600;
        }
        .admin-nav a:hover {
            color: var(--accent-hover);
        }
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing-md);
            margin-top: var(--spacing-lg);
        }
        .dash-card {
            background: var(--card-bg);
            padding: var(--spacing-lg);
            border-radius: var(--border-radius);
            border: 1px solid var(--border-color);
            text-align: center;
        }
    </style>
</head>
<body>

    <nav class="admin-nav">
        <h2>Admin Panel</h2>
        <a href="../logout.php">Uitloggen</a>
    </nav>

    <main class="container">
        <h1>Welkom, <?= htmlspecialchars($_SESSION['admin_username']) ?>!</h1>
        <p>nog niet gedaan lol</p>

        <div class="dashboard-cards">
            <div class="dash-card">
                <h3>Bezienswaardigheden</h3>
                <p>Beheer de toeristische plekken.</p>
                <a href="#" style="color: var(--accent-blue); text-decoration: none;">Binnenkort beschikbaar</a>
            </div>
            <div class="dash-card">
                <h3>Activiteiten</h3>
                <p>Beheer de activiteiten in de stad.</p>
                <a href="#" style="color: var(--accent-blue); text-decoration: none;">Binnenkort beschikbaar</a>
            </div>
        </div>
    </main>

</body>
</html>
