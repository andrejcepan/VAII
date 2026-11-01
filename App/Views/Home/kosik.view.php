<?php

/** @var \Framework\Support\LinkGenerator $link */

// Statický obsah košíka. Tlačidlá a ceny sa zatiaľ nemenia.
?>
<div class="page-heading">
    <h1>Košík</h1>
    <p>2 produkty / 3 kusy</p>
</div>

<div class="cart-layout">
    <section aria-label="Produkty v košíku">
        <article class="cart-item">
            <div class="product-image" aria-hidden="true">Obrázok</div>
            <div class="product-info">
                <h2>Kopačky</h2>
                <p>Veľkosť: 42 | Cena za kus: 60 €</p>
                <button class="remove" type="button" aria-label="Odstrániť kopačky">Odstrániť</button>
            </div>
            <div class="quantity" role="group" aria-label="Množstvo kopačiek">
                <button type="button" aria-label="Znížiť množstvo kopačiek">−</button>
                <input type="text" value="1" readonly aria-label="Počet kopačiek">
                <button type="button" aria-label="Zvýšiť množstvo kopačiek">+</button>
            </div>
            <strong class="item-price">60 €</strong>
        </article>

        <article class="cart-item">
            <div class="product-image" aria-hidden="true">Obrázok</div>
            <div class="product-info">
                <h2>Futbalová lopta</h2>
                <p>Veľkosť: 5 | Cena za kus: 25 €</p>
                <button class="remove" type="button" aria-label="Odstrániť futbalovú loptu">Odstrániť</button>
            </div>
            <div class="quantity" role="group" aria-label="Množstvo futbalových lôpt">
                <button type="button" aria-label="Znížiť množstvo lôpt">−</button>
                <input type="text" value="2" readonly aria-label="Počet lôpt">
                <button type="button" aria-label="Zvýšiť množstvo lôpt">+</button>
            </div>
            <strong class="item-price">50 €</strong>
        </article>
        <a class="back-link" href="<?= e($link->url('home.index')) ?>#ponuka">← Pokračovať v nákupe</a>
    </section>

    <section class="summary panel" aria-labelledby="summary-title">
        <h2 id="summary-title">Súhrn košíka</h2>
        <dl>
            <div>
                <dt>Počet kusov</dt>
                <dd>3</dd>
            </div>
            <div class="total">
                <dt>Celková cena</dt>
                <dd>110 €</dd>
            </div>
        </dl>
        <button class="primary" type="button">Pokračovať k objednávke</button>
    </section>
</div>
<p class="note">Statická ukážka košíka. Zmena množstva, odstránenie produktov a vytvorenie objednávky zatiaľ nie sú funkčné.</p>
