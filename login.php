<?php
session_start();
require_once 'includes/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        // Haal gebruiker op uit database
        $stmt = $pdo->prepare('SELECT id, username, password FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Inloggen succesvol
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $user['username'];
            header('Location: admin/index.php');
            exit;
        } else {
            $error = 'Ongeldige gebruikersnaam of wachtwoord.';
        }
    } else {
        $error = 'Vul alle velden in.';
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Berlijn - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            padding: var(--spacing-lg);
            background: var(--card-bg);
            border-radius: var(--border-radius);
            border: 1px solid var(--border-color);
            box-shadow: 0 8px 30px rgba(0,0,0,0.5);
        }
        .form-group {
            margin-bottom: var(--spacing-md);
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-primary);
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            background: var(--bg-color);
            color: var(--text-primary);
            font-family: inherit;
        }
        .form-group input:focus {
            outline: none;
            border-color: var(--accent-blue);
        }
        .btn {
            width: 100%;
            padding: 12px;
            background: var(--accent-blue);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn:hover {
            background: var(--accent-hover);
        }
        .error {
            color: #ff5555;
            background: rgba(255,85,85,0.1);
            padding: 12px;
            border-radius: 8px;
            margin-bottom: var(--spacing-md);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2>Admin Login</h2>
            <?php if ($error): ?>
                <div class="error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Wachtwoord</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Inloggen</button>
            </form>
            <p style="margin-top: 20px; text-align: center;"><a href="index.php" style="color: var(--accent-blue); text-decoration: none;">&larr; Terug naar de website</a></p>
        </div>
    </div>
</body>
</html>
