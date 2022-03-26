<?php

require_once 'vendor/autoload.php';

use IgnisWeb\ViewaLasVegas\Hotel;
use IgnisWeb\ViewaLasVegas\Location;


$hotels[] = new Hotel('Casa di Langa', 5, new Location('Italien', 'IT', '12050', 'Località Talloria', 'Cerretto Langhe',1), 'Dieses Hotel hat abgesehen von den tollen Zimmern & Suiten auch tolle Schönheitsbehandlungen im Angebot.');
$hotels[] = new Hotel('Monbijou Hotel', 4, new Location('Deutschland', 'DE', '10178', 'Berlin', 'Monbijouplatz',1), 'Dieses nur 300 m vom belebten Hackeschen Markt entfernte Boutique-Hotel verfügt über ein Fitnesscenter, einen Fahrradverleih und stilvolle Zimmer mit kostenfreiem WLAN. Die Museumsinsel erreichen Sie nach nur 400 m.');
$hotels[] = new Hotel('Wyndham Dubai Marina', 4, new Location('Vereinigte Arabische Emirate', 'AE', '215373', 'Dubai', 'Al Seba Street',394), "Das Wyndham Dubai Marina ist ein gehobenes Hotel mit atemberaubender Aussicht auf das Arabische Meer und den Stadtteil Dubai Marina.\nDie Unterkunft bietet einen kostenlosen Shuttleservice zum Strand, zu den Einkaufszentren, zur U-Bahn-Station und zu anderen Attraktionen. WLAN ist in der gesamten Unterkunft kostenfrei verfügbar.");

$template = file_get_contents('templates/main.html');

foreach ($hotels as $hotel) {
    foreach ($hotel->getKeyValuePairs() as $key => $value) {
        print($key . ' - ' . $value . "<br/>");
        str_replace("###$key###", $value, $template);
    }
//    $template = str_replace("###$key###", $value, $template);
}


echo $template;

