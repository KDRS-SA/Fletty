# Fletty - Deponeringsoversikt for digitalt depot.

PHP nettsider koblet mot MySQL database

GitHub fork fra Cecilie Hansen Rørås, IKA Kongsberg
https://github.com/ceciliehrr/Fletty

## 0. ToDo

0.1 Lese felter fra opplastet info.xml og automatisk fylle inn tilsvarende felter i skjemaet.
   \www\Elarkiv\DigitaltDepot\lastoppxml.php 
   må endres slik at feltene kan gjenbrukes.

## 1. Installasjonsveiledning

1.1. Opprett tom database "fletty" i MySQL (f. eks. i phpMyAdmin eller MySQL Workbench).
1.2. Opprett en MySQL-bruker og passord for PHP med full tilgang til database "fletty" (eks. "flettyBruker").
1.3. Importer "\mysql\fletty.sql" i MySQL.
1.4. Opprett ønskede brukere i "fletty" databasen, tabell "brukere" (sett brukernavn og passord).
1.5. Kopier katalog "Fletty" fra hovedkatalog "www" ønsket webserver root-katalog.

1.6. Rediger "\www\Elarkiv\koble_til_database.php".
   $servername = 'localhost';  // endres til ønsket server DNS eller IP-adresse.
   $username = 'databaseuser'; // endres til din MySQL PHP-bruker punkt 2 over.
   $password = 'somepassword'; // endres til din MySQL PHP-passord punkt 2 over.
   $dbname = 'fletty';         // endres hvis annet databasenavn enn fletty skal brukes

## 2. Brukerveiledning

2.1. Start fra nettsiden "Digitalt Depot - prosesser og rutiner"
   http://serveradresse/Elarkiv
   
   Skal automatisk reroutes til http://serveradresse/Elarkiv/DigitaltDepot/rutiner.php
   Ingen av de 6 lenkene er en del av Git Repository Fletty og virker derfor ikke etter installasjon.
   Se ev. egen installasjonsveiledning rutiner.php og de andre lenkene fra denne siden.
   
2.2. Logg inn i Fletty oppe i venstre hjørne fra "Digitalt Depot - prosesser og rutiner".

2.3 Brukerveiledning Fletty (kommer senere)

## 4. Testet på UniServerZ

Testet på UniServerZ versjon 13.3.2
- PHP versjon 7.1.1
- Apache2 (20120211)
- MySQL versjon 5.6.5
- phpMyAdmin versjon 4.6.6

https://uniformserver.com/
https://sourceforge.net/projects/miniserver/files/
https://sourceforge.net/projects/miniserver/files/latest/download?source=files
