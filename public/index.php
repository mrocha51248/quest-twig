<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre'];

echo $twig->render('home.html.twig', ['products' => $products]);
