# instructions

Creiamo una tabella trains e relativa Migration

Ogni treno dovrà avere almeno:
- Azienda 
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Numero Carrozze
- In orario
- Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto

Inserite inizialmente i dati tramite PhpMyAdmin o artisan tinker per chi ne ha capito l'utilizzo.

Create il modello Model relativo alla migrazione che avete predisposto al fine di mappare la tabelle del db ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

## Table: trains

- id BIGINT AI PK UQ
- Azienda VARCHAR(50)
- Stazione di partenza VARCHAR(100)
- Stazione di arrivo VARCHAR(100)
- Orario di partenza TIME
- Orario di arrivo TIME
- Codice Treno VARCHAR(15)
- Numero Carrozze TINYINT
- In orario BOOLEAN
- Cancellato BOOLEAN    