# Futbalový e-shop

**Andrej Čepan · 5ZYI34**

Jednoduchá semestrálna aplikácia vo frameworku Vaííčko. Aktuálne funguje úvodná stránka,
košík a navigácia medzi nimi. Obsah je statický; nákupné tlačidlá a prihlásenie zatiaľ nič nespracúvajú.

## Spustenie

Vo VS Code otvorte **Terminal → Run Task → Spustiť Futbalový e-shop**.
Potom v prehliadači otvorte **http://localhost:8000**. Server zastavíte cez **Ctrl+C** v termináli.
Ak server už beží, stačí otvoriť adresu v prehliadači.

Rovnaké spustenie cez PowerShell v koreňovom priečinku projektu:

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File .\start.ps1
```

[start.ps1](start.ps1) hľadá PHP najprv v PATH, potom v `%LOCALAPPDATA%\Programs\PHP\8.3`.
Na tomto počítači je PHP pripravené v druhej uvedenej ceste. Parameter `ExecutionPolicy`
platí len pre spustený proces a nemení systémové nastavenia.

Na inom počítači potrebujete PHP 8.3 alebo novšie. Ak je v PATH, stačí:

```sh
php -S localhost:8000 -t public
```

Verejný koreň servera je **public**. PHP stránky otvárajte cez server, nie dvojklikom.
Databázu ani Composer pre túto úlohu netreba.

## Ako sa zobrazí stránka

Príklad: `http://localhost:8000/?c=home&a=kosik`

1. Požiadavka príde do [public/index.php](public/index.php), ktorý spustí framework.
2. Framework prečíta `c=home` (kontrolér) a `a=kosik` (akcia).
3. V [HomeController.php](App/Controllers/HomeController.php) zavolá metódu `kosik()`.
4. `return $this->html()` vyberie podľa názvu kontroléra a akcie pohľad [kosik.view.php](App/Views/Home/kosik.view.php).
5. Obsah pohľadu sa vloží cez `$contentHTML` do [spoločného layoutu](App/Views/Layouts/root.layout.view.php).
6. Prehliadač dostane hotové HTML a načíta [style.css](public/css/style.css).

Úvodná stránka funguje rovnako s akciou `index`. Bez parametrov sa automaticky použije `home.index`.
Kontrolér vyberá pohľad, pohľad obsahuje obsah stránky a layout pridáva spoločnú hlavičku, menu a pätičku.

V pohľadoch a layoute sa používajú tri jednoduché pomôcky frameworku:

- `$link->url('home.kosik')` vytvorí odkaz na akciu košíka.
- `$link->asset('css/style.css')` vytvorí cestu k súboru vo verejnom priečinku.
- `e(...)` upraví text na bezpečný výpis do HTML, napríklad znak `&` v odkaze.

## Kde čo upraviť

| Čo chcete zmeniť | Súbor |
| --- | --- |
| Akcie stránok | [App/Controllers/HomeController.php](App/Controllers/HomeController.php) |
| Obsah úvodnej stránky | [App/Views/Home/index.view.php](App/Views/Home/index.view.php) |
| Produkty a súhrn košíka | [App/Views/Home/kosik.view.php](App/Views/Home/kosik.view.php) |
| Hlavičku, menu alebo pätičku oboch stránok | [App/Views/Layouts/root.layout.view.php](App/Views/Layouts/root.layout.view.php) |
| Farby, rozostupy a mobilné zobrazenie | [public/css/style.css](public/css/style.css) |
| Názov aplikácie a nastavenia | [App/Configuration.php](App/Configuration.php) |
| Spustenie vo VS Code | [.vscode/tasks.json](.vscode/tasks.json) |

[Framework/](Framework/) je pôvodné jadro Vaííčka. Pri úpravách obsahu stránok doň netreba zasahovať.
[App/Models/](App/Models/) je pripravený pre budúce dátové modely a [App/Views/_Error/](App/Views/_Error/)
obsahuje chybový pohľad frameworku. Databáza a prihlasovanie sa zatiaľ nepoužívajú.

Pôvodná úloha 4 zostáva v [html/](html/). Opis a plán semestrálky sú v [analýze](analyza/README.md),
návrh rozloženia vo [wireframe.pdf](analyza/wireframe.pdf).

## Rýchle overenie

1. Otvorte úvodnú stránku a cez menu prejdite do košíka.
2. Skontrolujte dva produkty, tri kusy a celkovú cenu 110 €.
3. Skúste odkazy **Domov**, **Ponuka produktov** a **Pokračovať v nákupe**.
4. Zúžte okno alebo cez F12 a Ctrl+Shift+M nastavte šírku 375 px.
   Súhrn košíka má byť pod produktmi a stránka sa nemá posúvať vodorovne.

Obrázky produktov sú zástupné plochy, logo je znak lopty. JavaScript ani externé obrázky sa nenačítavajú.

## Voliteľné spustenie cez Docker

Konfigurácia v [docker/](docker/) pochádza z frameworku. Ak používate Docker, na túto úlohu stačí služba `web`:

```sh
docker compose -f docker/docker-compose.yml up -d web
```

Otvorte **http://localhost**. Zastavenie: `docker compose -f docker/docker-compose.yml down`.
Služby `db` a `adminer` sú pripravené pre neskoršiu prácu s databázou.

## Použitý framework

[Vaííčko](https://github.com/thevajko/vaiicko) 3.0.7, commit `1abe6ab1672d062277a6f86953b9f5ef0775e93e`.
Dokumentácia: [vytvorenie stránky](https://github.com/thevajko/vaiicko/wiki/06-Vytvorenie-vlastnej-str%C3%A1nky)
a [spoločné rozloženie](https://github.com/thevajko/vaiicko/wiki/12-Rozlo%C5%BEenie-celej-str%C3%A1nky).
