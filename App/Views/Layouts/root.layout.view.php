<?php

/** @var string $contentHTML */
/** @var \Framework\Support\LinkGenerator $link */

// Layout obsahuje spoločné časti oboch stránok.
// $link vytvára odkazy; $contentHTML je už vykreslený obsah konkrétneho pohľadu.
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e(App\Configuration::APP_NAME) ?></title>
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body>
    <header class="header">
        <div class="container header-content">
            <a class="brand" href="<?= e($link->url('home.index')) ?>">
                <span class="logo" aria-hidden="true">⚽</span>
                Futbalový e-shop
            </a>
            <div class="header-actions">
                <button type="button">Prihlásenie / Registrácia</button>
                <a class="button" href="<?= e($link->url('home.kosik')) ?>">Košík (3)</a>
            </div>
        </div>
    </header>

    <nav class="navigation" aria-label="Hlavná navigácia">
        <div class="container nav-content">
            <a href="<?= e($link->url('home.index')) ?>">Domov</a>
            <a href="<?= e($link->url('home.index')) ?>#ponuka">Ponuka produktov</a>
            <a href="<?= e($link->url('home.kosik')) ?>">Košík</a>
            <button type="button">Moje objednávky</button>
        </div>
    </nav>

    <main class="container">
        <?= $contentHTML ?>
    </main>

    <footer class="footer">
        <div class="container footer-content">
            <strong>Futbalový e-shop</strong>
            <span>Základné vybavenie pre futbalistov</span>
        </div>
    </footer>
</body>
</html>
