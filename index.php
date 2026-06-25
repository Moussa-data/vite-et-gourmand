<?php
/**
 * Vite & Gourmand — Point d'entrée
 * ECF TP Développeur Web et Web Mobile — Studi 2026
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite & Gourmand — Traiteur bordelais</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="hero">
        <h1 class="hero__title">Vite <span class="amp">&amp;</span> Gourmand</h1>
        <p class="hero__tagline">Traiteur bordelais depuis 2001</p>
        <p class="hero__intro">
            Bienvenue sur le futur site de notre traiteur. Le projet est en cours de construction.
        </p>
        <a href="#" class="btn btn--primary">Voir les menus</a>
    </header>

    <main class="container">
        <section class="card">
            <h2>Setup réussi !</h2>
            <p>
                Si tu vois cette page avec les bonnes couleurs et la bonne typographie,
                ton environnement est correctement configuré. Tu peux passer à la suite.
            </p>
            <p class="muted">
                Page d'accueil temporaire générée le <?php echo date('d/m/Y H:i'); ?>
                — PHP <?php echo phpversion(); ?>.
            </p>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Vite &amp; Gourmand — ECF DWWM par Moussa Wane Camara</p>
    </footer>

</body>
</html>
