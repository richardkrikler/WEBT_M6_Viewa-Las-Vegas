<?php

require_once 'vendor/autoload.php';

use IgnisWeb\ViewaLasVegas\DB;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$hotels = DB::getHotels();

$loader = new FilesystemLoader('templates');
$twig = new Environment($loader);
$template = $twig->load('main.html');
echo $template->render(['hotels' => $hotels]);
