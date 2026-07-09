<?php
// $host = 'mysql_db'; // Docker database container hostname
// $dbname = 'berlijn_hackathon';
// $user = 'root';
// $pass = 'root';

$host = 'localhost'; // Docker database container hostname
$dbname = 'u240669_berlijn-hackathon';
$user = 'u240669_berlijn-hackathon';
$pass = 'LZYHAg8UY5s5sjBZQJ26';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // Stel foutmodus in op exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Haal standaard associatieve arrays op
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // Stop met uitvoeren en toon een vriendelijke (of debug) foutmelding
    die("Kan geen verbinding maken met de database: " . $e->getMessage());
}
?>
