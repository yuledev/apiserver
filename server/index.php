<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/getFruits', function () {
    echo json_encode(array('banana','apple','ananas','lemon'));
});

$app->run();