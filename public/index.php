<?php

// Vstupný bod každej stránky. Načíta automatické vyhľadávanie PHP tried.
require __DIR__ . '/../Framework/ClassLoader.php';

use Framework\Core\App;

try {
    $app = new App();

    // Framework podľa URL vyberie kontrolér a akciu a zobrazí pohľad v layoute.
    $app->run();
} catch (Exception $e) {
    // Zachytenie chyby pri spustení frameworku.
    die('An error occurred: ' . $e->getMessage());
}
