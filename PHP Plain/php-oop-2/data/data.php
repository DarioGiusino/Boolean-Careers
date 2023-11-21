<?php
include_once __DIR__ . '/../models/Product.php';
include_once __DIR__ . '/../models/Category.php';
include_once __DIR__ . '/../models/Food.php';
include_once __DIR__ . '/../models/Kennel.php';
include_once __DIR__ . '/../models/Toy.php';

// products categories
$dog_category = new Category('Cani');
$cat_category = new Category('Gatti');

// products
$cat_food = new Food('Monge Grill Grain Free', 'Monge Cat Grill 85 gr è il cibo umido in bustina da 85 gr in diversi gusti, grazie al quale il vostro felino riceverà ogni giorno tutto il benessere quotidiano del quale necessita. Le formulazioni sono altamente appetibili, con carne o pesce fresco scelto attentamente da esperti in materia.', $cat_category, 18.48, 'assets/cat_food.png', 85, 'Salmone');

$dog_food = new Food('Monge Monoproteico', 'Monge Monoproteico SOLO 150 gr è il cibo umido completo per cani di tutte le taglie ed età. Il suo complesso nutrizionale è sviluppato per favorire il benessere dell\'animale. Questo paté è fatto di sole carni selezionate di tonno di altissima qualità.', $dog_category, 8.64, 'assets/dog_food.jpg', 150, 'Coniglio');

$cat_kennel = new Kennel('Cuccia Dido Blu Imac', 'Con la Cuccia Dido Imac, disponibile nella colorazione Blu, renderai accogliente un angolo di casa dedicato al tuo amico cane o gatto.', $cat_category, 8.89, 'assets/cat_kennel.png', '50x38x20,5', 'blu');

$dog_kennel = new Kennel('Cuccia rettangolare Rodi Sfoderabile', 'La Cuccia rettangolare Rodi Sfoderabile cagnolini Bourdeux Basic Leopet è l\'ottimo alleato per il relax del tuo amico a quattro zampe, senza rinunciare all\'intramontabile stile made in Italy del brand.', $dog_category, 44.99, 'assets/dog_kennel.jpg', '70x55', 'bordeaux');

$cat_toy = new Toy('Gioco per gatti Pira-topino Camon', 'amon Gioco per gatti Pira-topino è un divertente topino in tessuto caratterizzato dalla simpatica fantasia "pirata", con anche il caratteristico cappellino. Questo gioco è disponibile in due diverse varianti di colore: grigio e terra.', $cat_category, 2.49, 'assets/cat_toy.jpg', 'stoffa');

$dog_toy = new Toy('Fuxtreme Palla con Ossi a Ultrasuoni Ferribiella', 'Squeaker palla silenziosa a ultrasuoni. La pallina Fuxtreme Ultrasuoni in gomma naturale è il gioco che diverte il vostro cane rilassando le vostre orecchie.', $dog_category, 4.49, 'assets/dog_toy.jpg', 'plastica');

$products = [$cat_food, $dog_food, $cat_kennel, $dog_kennel, $cat_toy, $dog_toy];
