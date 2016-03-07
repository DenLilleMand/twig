<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');

$twig = new Twig_Environment($loader);

echo $twig->render('simple.twig', array(
    'name' => 'Fabien',
    'header' => 'My webpage!',
    'foo' => array(
	'bar' => 'bar',
    ),
    'data' => array(
	'data-foo' => 'herpderp',
    ),
));

