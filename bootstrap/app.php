<?php
 
session_start();
 
require __DIR__ . '/../vendor/autoload.php';


 
$app = new \Slim\App([
 
'settings' => [
 
       'displayErrorDetails' => true,
 
]
 
]);

$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache' => false
    ]);

    $view->addExtension(new Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()));
    
    return $view;
};


