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
            <!-- Dummy Item 1 -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1601614761001-f5b12850cda8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Fietstour" class="card-img">
                <div class="card-content">
                    <span class="card-category">Outdoor</span>
                    <h2 class="card-title">Fietstour langs de Muur</h2>
                    <p>Ontdek de verborgen verhalen van de Koude Oorlog op de fiets met een ervaren gids.</p>
                    <div class="card-meta">
                        <span><span class="material-symbols-rounded" style="font-size:18px;">calendar_today</span> Dagelijks</span>
                        <span><span class="material-symbols-rounded" style="font-size:18px;">map</span> Bernauer Str.</span>
                    </div>
                </div>
            </div>

            <!-- Dummy Item 2 -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1543886733-f5c71d9d9bb7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Museuminsel" class="card-img">
                <div class="card-content">
                    <span class="card-category">Cultuur</span>
                    <h2 class="card-title">Museumsinsel Bezoek</h2>
                    <p>Bezoek de vijf wereldberoemde musea op het eiland in de Spree. Een droom voor kunstliefhebbers.</p>
                    <div class="card-meta">
                        <span><span class="material-symbols-rounded" style="font-size:18px;">calendar_today</span> Di - Zo</span>
                        <span><span class="material-symbols-rounded" style="font-size:18px;">map</span> Mitte</span>
                    </div>
                </div>
            </div>

            <!-- Dummy Item 3 -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1493606371202-6275828f90f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Berghain" class="card-img">
                <div class="card-content">
                    <span class="card-category">Nachtleven</span>
                    <h2 class="card-title">Clubben in Berghain</h2>
                    <p>Ervaar de beruchte technoscene van Berlijn in de meest exclusieve club ter wereld.</p>
                    <div class="card-meta">
                        <span><span class="material-symbols-rounded" style="font-size:18px;">calendar_today</span> Vrij - Zo</span>
                        <span><span class="material-symbols-rounded" style="font-size:18px;">map</span> Friedrichshain</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/nav.php'; ?>

</body>
</html>
