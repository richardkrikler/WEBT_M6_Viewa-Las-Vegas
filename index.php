<?php

require_once 'vendor/autoload.php';

use IgnisWeb\ViewaLasVegas\Hotel;
use IgnisWeb\ViewaLasVegas\Location;


$hotels[] = new Hotel('Casa di Langa', 5, new Location('Italien', 'IT', '12050', 'Località Talloria', 'Cerretto Langhe',1), 'Dieses Hotel hat abgesehen von den tollen Zimmern & Suiten auch tolle Schönheitsbehandlungen im Angebot.', 'https://t-cf.bstatic.com/xdata/images/hotel/max1280x900/338370109.jpg?k=41e0d5035d6b54d83c1e98c08878a4204f3f7c2f62ced7d763db6983258c162e');
$hotels[] = new Hotel('Monbijou Hotel', 4, new Location('Deutschland', 'DE', '10178', 'Berlin', 'Monbijouplatz',1), 'Dieses nur 300 m vom belebten Hackeschen Markt entfernte Boutique-Hotel verfügt über ein Fitnesscenter, einen Fahrradverleih und stilvolle Zimmer mit kostenfreiem WLAN. Die Museumsinsel erreichen Sie nach nur 400 m.', 'https://t-cf.bstatic.com/xdata/images/hotel/max1280x900/20115156.jpg?k=e88b2fed1fb56981c933fac24ec43203db2115ab25f90d2ad68beb69a9f7758c');
$hotels[] = new Hotel('Wyndham Dubai Marina', 4, new Location('Vereinigte Arabische Emirate', 'AE', '215373', 'Dubai', 'Al Seba Street',394), "Das Wyndham Dubai Marina ist ein gehobenes Hotel mit atemberaubender Aussicht auf das Arabische Meer und den Stadtteil Dubai Marina.\nDie Unterkunft bietet einen kostenlosen Shuttleservice zum Strand, zu den Einkaufszentren, zur U-Bahn-Station und zu anderen Attraktionen. WLAN ist in der gesamten Unterkunft kostenfrei verfügbar.", 'https://t-cf.bstatic.com/xdata/images/hotel/max1280x900/263941563.jpg?k=40ab706626d6a71089dd9e865bc91d2433b18f3287a51864e8589d4660a63cb6');

$template = file_get_contents('templates/main.html');

foreach ($hotels as $hotel) {
    foreach ($hotel->getKeyValuePairs() as $key => $value) {
        $template = preg_replace("/[#]{3}($key)[#]{3}/", $value, $template, 1);
        // $template = str_replace("###$key###", $value, $template);
    }
}

echo $template;
