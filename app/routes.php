<?php

$app->get('/', function ($request, $response) {

    return $this->view->render($response, 'skeleton.twig');
    
});

$app->get('/home', function ($request, $response) {

    return $this->view->render($response, 'home.twig');
    
});

$app->get('/account-manager', function ($request, $response) {

    return $this->view->render($response, 'test.twig');
    
});

$app->get('/trade-copier', function ($request, $response) {

    return $this->view->render($response, 'signal-provider.twig');
    
});

$app->get('/whitelabel', function ($request, $response) {

    return $this->view->render($response, 'whitelabel.twig');
    
});

$app->get('/pricing', function ($request, $response) {

    return $this->view->render($response, 'pricing.twig');
    
});

$app->get('/privacy', function ($request, $response) {

    return $this->view->render($response, 'privacy.twig');
    
});

$app->get('/terms', function ($request, $response) {

    return $this->view->render($response, 'terms.twig');
    
});

$app->get('/contact', function ($request, $response) {

    return $this->view->render($response, 'contact.twig');
    
});

?>