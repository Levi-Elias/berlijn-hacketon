<?php
require_once 'includes/db.php';

try {
    // Verwijder bestaande admins
    $pdo->exec("DELETE FROM users WHERE username = 'admin'");
    
    // Nieuw wachtwoord hashen
    $password = 'admin123';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    // Voeg toe aan database
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute([
        'username' => 'admin',
        'password' => $hash
    ]);
    
    echo "Admin succesvol aangemaakt! Je kunt nu inloggen met:<br>";
    echo "Gebruikersnaam: admin<br>";
    echo "Wachtwoord: admin123<br>";
    echo "<br><a href='login.php'>Ga naar login</a>";
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
}
?>
