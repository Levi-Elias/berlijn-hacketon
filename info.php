<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Berlijn - Praktische Info</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="hero" style="height: 150px; background: linear-gradient(135deg, #161b22, #0d1117);">
        <div class="hero-content">
            <h1>Praktische Info</h1>
        </div>
    </header>

    <main class="container">
        
        <!-- Map -->
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155459.73972621644!2d13.259930833139366!3d52.50693116817178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84e373f035901%3A0x42120465b5e3b70!2sBerlijn%2C%20Duitsland!5e0!3m2!1snl!2snl!4v1689234567890!5m2!1snl!2snl" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- Emergency Numbers -->
        <div class="info-section">
            <h3><span class="material-symbols-rounded">emergency</span> Noodnummers</h3>
            <ul class="info-list">
                <li><span class="material-symbols-rounded" style="color: #ff5555;">local_police</span> Politie: 110</li>
                <li><span class="material-symbols-rounded" style="color: #ff5555;">local_hospital</span> Ambulance / Brandweer: 112</li>
            </ul>
        </div>

        <!-- Public Transport -->
        <div class="info-section">
            <h3><span class="material-symbols-rounded">train</span> Openbaar Vervoer</h3>
            <ul class="info-list">
                <li><span class="material-symbols-rounded">subway</span> U-Bahn: Vooral in het centrum</li>
                <li><span class="material-symbols-rounded">directions_railway</span> S-Bahn: Verbindt de buitenwijken</li>
                <li><span class="material-symbols-rounded">tram</span> Tram: Vooral in Oost-Berlijn</li>
            </ul>
            <p style="margin-top: 12px; font-size: 0.9rem;">Tip: Koop de Berlin WelcomeCard voor onbeperkt reizen en kortingen.</p>
        </div>

    </main>

    <?php include 'includes/nav.php'; ?>

</body>
</html>
