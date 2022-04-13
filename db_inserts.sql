
INSERT INTO location (id, country, country_id, postal_code, city, street, house_number)
VALUES (1, 'Italien', 'IT', '12050', 'Località Talloria', 'Cerretto Langhe', 1),
       (2, 'Deutschland', 'DE', '10178', 'Berlin', 'Monbijouplatz', 1),
       (3, 'Vereinigte Arabische Emirate', 'AE', '215373', 'Dubai', 'Al Seba Street', 394);

INSERT INTO hotel (id, name, stars, fk_pk_location_id, description, img_url)
VALUES (1, 'Casa di Langa', 5, 1, 'Dieses Hotel hat abgesehen von den tollen Zimmern & Suiten auch tolle Schönheitsbehandlungen im Angebot.', 'https://t-cf.bstatic.com/xdata/images/hotel/max1280x900/338370109.jpg?k=41e0d5035d6b54d83c1e98c08878a4204f3f7c2f62ced7d763db6983258c162e'),
       (2, 'Monbijou Hotel', 3, 2, 'Dieses nur 300 m vom belebten Hackeschen Markt entfernte Boutique-Hotel verfügt über ein Fitnesscenter, einen Fahrradverleih und stilvolle Zimmer mit kostenfreiem WLAN. Die Museumsinsel erreichen Sie nach nur 400 m.', 'https://t-cf.bstatic.com/xdata/images/hotel/max1280x900/20115156.jpg?k=e88b2fed1fb56981c933fac24ec43203db2115ab25f90d2ad68beb69a9f7758c'),
       (3, 'Wyndham Dubai Marina', 4, 3, 'Das Wyndham Dubai Marina ist ein gehobenes Hotel mit atemberaubender Aussicht auf das Arabische Meer und den Stadtteil Dubai Marina.\nDie Unterkunft bietet einen kostenlosen Shuttleservice zum Strand, zu den Einkaufszentren, zur U-Bahn-Station und zu anderen Attraktionen. WLAN ist in der gesamten Unterkunft kostenfrei verfügbar.', 'https://t-cf.bstatic.com/xdata/images/hotel/max1280x900/263941563.jpg?k=40ab706626d6a71089dd9e865bc91d2433b18f3287a51864e8589d4660a63cb6');

SELECT id, name, stars, fk_pk_location_id, description, img_url
FROM hotel;

SELECT id, country, country_id, postal_code, city, street, house_number
FROM location WHERE id = 2;
