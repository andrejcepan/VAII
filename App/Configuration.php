<?php

namespace App;

use Framework\Core\ErrorHandler;
use Framework\DB\DefaultConventions;

class Configuration
{
    // Základné nastavenia aplikácie.
    public const APP_NAME = 'Futbalový e-shop';
    public const FW_VERSION = '3.0.7';

    // Spoločný layout: App/Views/Layouts/root.layout.view.php.
    public const ROOT_LAYOUT = 'root';

    // Pri vývoji zobrazujeme podrobnosti o chybách.
    public const SHOW_EXCEPTION_DETAILS = true;
    public const ERROR_HANDLER_CLASS = ErrorHandler::class;

    // Databázu zatiaľ nepoužívame. Hodnoty sú pripravené pre Docker.
    public const DB_HOST = 'db';
    public const DB_NAME = 'vaiicko_db';
    public const DB_USER = 'vaiicko_user';
    public const DB_PASS = 'dtb456';
    public const DB_CONVENTIONS_CLASS = DefaultConventions::class;
    public const SHOW_SQL_QUERY = false;

    // Prihlásenie je vypnuté: AUTH_CLASS a LOGIN_URL nie sú nastavené.
    // Kľúč pre ukladanie používateľa do session pri budúcom prihlasovaní.
    public const IDENTITY_SESSION_KEY = 'fw.session.user.identity';

    // Predvolené nastavenia frameworku pre budúce nahrávanie súborov a modely.
    public const UPLOAD_DIR = 'uploads' . DIRECTORY_SEPARATOR;
    public const UPLOAD_URL = '/uploads/';
    public const MODEL_REQUIRE_FILLABLE = true;

    // Dodatočné pravidlá načítavania zdrojov (CSP) zatiaľ nie sú zapnuté.
    public const CONTENT_SECURITY_POLICY = null;
    public const CONTENT_SECURITY_POLICY_REPORT_ONLY = true;
}
