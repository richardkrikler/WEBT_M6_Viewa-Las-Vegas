<?php

require_once 'vendor/autoload.php';

use IgnisWeb\ViewaLasVegas\DB;
use TYPO3Fluid\Fluid\View\TemplateView;


$hotels = DB::getHotels();


// Initializing the View: rendering in Fluid takes place through a View instance
// which contains a RenderingContext that in turn contains things like definitions
// of template paths, instances of variable containers and similar.
$view = new TemplateView();

// TemplatePaths object: a subclass can be used if custom resolving is wanted.
$paths = $view->getTemplatePaths();


# --> nur für ein einzelnes Template
// Assigning the template path and filename to be rendered. Doing this overrides
// resolving normally done by the TemplatePaths and directly renders this file.
$paths->setTemplatePathAndFilename('templates/main.html');

// In this example we assign all our variables in one array. Alternative is
// to repeatedly call $view->assign('name', 'value').
$view->assignMultiple(['hotels' => $hotels]);

// Rendering the View: plain old rendering of single file, no bells and whistles.
$output = $view->render();


echo $output;