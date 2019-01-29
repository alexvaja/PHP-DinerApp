<?php
    require_once 'lib/Twig/Autoloader.php';

    Twig_Autoloader::register();#

    $loader = new Twig_Loader_Array([
        'index' => 'Hello {{ name }}!',
    ]);
    $twig = new Twig_Environment($loader);

    echo $twig->render('index', ['name' => 'Fabien']);
?>