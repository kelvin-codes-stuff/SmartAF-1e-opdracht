## Hoe is deze code geschreven
- Deze code is geschreven volgens de PSR-12 PHP coding standaard.


## Welke dingen moets ik opzoeken?
- Ik kreeg een error wanneer ik een bestand wou opslaan in de controller.
Dit bleek te komen omdat ik `enctype="multipart/form-data` miste in het form in de blade.
- Frontend code


## Wat kon ik direct uit me hoofd schrijven?
- Commands voor de migratie, controllers, routes, route `controller::class`, models (dus bijv `$fillable`,-
calls als `fileHandler::create` etc. Basicly alles op die `enctype="multipart/form-data` na.


## Functies:
- index: table met datum, beschrijving,
  piroriteit, bestandsnaam en de knoppen: open, verwijder*, bewerk**, download
- View pagina (dmv van de open knop): Laat de afbeelding, naam, beschrijving, pioriteit en datum zien, met de 4 eerder genoemde knoppen
- Edit pagina: Kan de bestandsnaam, beschrijving en pioriteit aanpassen

* Dit verwijderd zowel de DB entry als het bestand
** Dit bewerkt zowel de DB entry als het bestand


## Hoe kun je dit project laten draaien?
1) Download de zip
2) Extract de zip
3) Ga naar de folder. Bewerkt de env file zodat het kan connecten naar je DB.
4) Open de folder in een terminal, voer `composer install` uit
5) Voer `php artisan migrate` uit, dit zorgt ervoor dat de tables gemaakt worden
6) De laatste stap: Voer `php artisan serve` uit de local dev env te starten

