<?php

require_once __DIR__ . "/classes/Prodotti.php";
require_once __DIR__ . "/classes/Utente.php";
require_once __DIR__ . "/classes/Premium.php";
require_once __DIR__ . "/classes/Libri.php";

$mattia = new UtentePremium("Mattia","Villani", 25);
$codiceDaVinci = new Libri("Il Coidce Da Vinci", "30", "loremdajasdhsajdhjash");
$codiceDaVinci -> setAutore("Dan Brown");
var_dump($codiceDaVinci);
var_dump($mattia);