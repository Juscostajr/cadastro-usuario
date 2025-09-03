<?php

use App\Controller\NotFoundController;
use App\Controller\SampleController;
use App\Controller\UserController;

require_once __DIR__ . '/../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$pages = [
    '/user' => new UserController,
    '/sample' => new SampleController
];

$controller = $pages[$uri] ?? new NotFoundController;

$controller->render();

?>




