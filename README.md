# Futbalový e-shop

Meno a priezvisko študenta: Andrej Čepan

Študijná skupina: 5ZYI34

## Stručný opis projektu
Semestrálny projekt predstavuje jednoduchý webový e-shop s futbalovým vybavením, ako sú kopačky, lopty, chrániče a ďalšie základné doplnky. Aplikácia je určená rekreačným aj aktívnym futbalistom, ktorí si chcú prezrieť ponuku a objednať potrebné vybavenie na jednom mieste.

Hlavným cieľom je umožniť zákazníkovi vybrať produkty, vložiť ich do košíka a vytvoriť objednávku. Správca bude môcť spravovať ponuku a objednávky. V základnej verzii sa nepočíta s online platobnou bránou.

## Role v projekte
- **Návštevník** – prezerá ponuku a detaily produktov, môže sa zaregistrovať alebo prihlásiť.
- **Registrovaný zákazník** – nakupuje produkty a prezerá svoje objednávky.
- **Správca** – spravuje produkty, kategórie a stav objednávok.

## Prípady použitia podľa rolí
- **Návštevník** si prezrie produkty podľa kategórie, otvorí detail produktu a vytvorí si účet.
- **Registrovaný zákazník** vloží produkt do košíka, upraví množstvo alebo produkt odstráni, zadá doručovacie údaje a odošle objednávku. Následne si prezrie jej stav a históriu svojich objednávok.
- **Správca** pridá, upraví alebo vyradí produkt z ponuky, spravuje kategórie a zmení stav objednávky.

## Plánované entity
- **Používateľ** – údaje o zákazníkovi alebo správcovi: meno, e-mail, heslo uložené ako hash a rola. Používateľ môže vytvárať objednávky.
- **Kategória** – rozdelenie ponuky, napríklad kopačky, lopty a chrániče: názov a opis. Obsahuje produkty.
- **Produkt** – predávaný tovar: názov, opis, cena, obrázok, dostupné množstvo a prípadná veľkosť. Patrí do kategórie.
- **Objednávka** – záznam nákupu: zákazník, dátum, stav, celková cena a doručovacie údaje. Obsahuje položky objednávky.
- **Položka objednávky** – konkrétny produkt v objednávke: produkt, množstvo a jednotková cena v čase nákupu.

## Vzťahy medzi entitami
- **Používateľ – Objednávka (1:N):** jeden zákazník môže mať viac objednávok, každá objednávka patrí jednému zákazníkovi.
- **Kategória – Produkt (1:N):** kategória obsahuje viac produktov, každý produkt patrí do jednej kategórie.
- **Objednávka – Položka objednávky (1:N):** objednávka obsahuje jednu alebo viac položiek.
- **Produkt – Položka objednávky (1:N):** produkt sa môže nachádzať v položkách viacerých objednávok. Vzťah medzi produktmi a objednávkami je teda M:N cez položky objednávky.

## Hlavné stránky aplikácie
1. **Domovská stránka** – predstavenie e-shopu a prehľad kategórií.
2. **Ponuka produktov** – zoznam produktov s filtrovaním podľa kategórie.
3. **Detail produktu** – obrázok, opis, cena, dostupnosť a pridanie do košíka.
4. **Registrácia a prihlásenie** – vytvorenie účtu a prístup zákazníka alebo správcu.
5. **Košík** – prehľad vybraných produktov, úprava množstva a celková cena.
6. **Vytvorenie objednávky** – zadanie doručovacích údajov a potvrdenie nákupu.
7. **Moje objednávky** – história a detail objednávok prihláseného zákazníka.
8. **Administrácia** – správa produktov, kategórií a objednávok.

## Rozdelenie funkcionality
### Základné funkcie
- Registrácia, prihlásenie a rozlíšenie zákazníka a správcu.
- Prezeranie produktov a filtrovanie podľa kategórie.
- Košík a vytvorenie objednávky bez online platby.
- Prehľad vlastných objednávok zákazníka.
- Správa produktov, kategórií a stavov objednávok.

### Rozširujúce funkcie
- Vyhľadávanie podľa názvu a filtrovanie podľa ceny či veľkosti.
- Hodnotenia produktov a zoznam obľúbených produktov.
- E-mailové potvrdenie objednávky.
