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
            <!-- Dummy Item 1 -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1560969184-10fe8719e047?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Brandenburger Tor" class="card-img">
                <div class="card-content">
                    <span class="card-category">Historie</span>
                    <h2 class="card-title">Brandenburger Tor</h2>
                    <p>De iconische stadspoort en het symbool van de Duitse hereniging. Een absolute must-see in Berlijn.</p>
                    <div class="card-meta">
                        <span><span class="material-symbols-rounded" style="font-size:18px;">map</span> Mitte</span>
                    </div>
                </div>
            </div>

            <!-- Dummy Item 2 -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1574676550785-0557cc6f91cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Reichstag" class="card-img">
                <div class="card-content">
                    <span class="card-category">Architectuur</span>
                    <h2 class="card-title">Reichstag</h2>
                    <p>Het Duitse parlementsgebouw met de beroemde glazen koepel. Biedt een prachtig uitzicht over de stad.</p>
                    <div class="card-meta">
                        <span><span class="material-symbols-rounded" style="font-size:18px;">map</span> Tiergarten</span>
                    </div>
                </div>
            </div>

            <!-- Dummy Item 3 -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1618142750398-333e3af7fbde?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Berlijnse Muur" class="card-img">
                <div class="card-content">
                    <span class="card-category">Monument</span>
                    <h2 class="card-title">East Side Gallery</h2>
                    <p>Het langste nog bestaande stuk van de Berlijnse Muur, bedekt met indrukwekkende street art.</p>
                    <div class="card-meta">
                        <span><span class="material-symbols-rounded" style="font-size:18px;">map</span> Friedrichshain</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/nav.php'; ?>

</body>
</html>
