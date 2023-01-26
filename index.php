<?php
declare(strict_types=1);

require_once (__DIR__ . '/vendor/autoload.php');

use movies\Framework\DiContainer;
use movies\Framework\Routes;

$di = new DiContainer();
$route = str_replace('/paskaitos/sql/38p/movies', '', $_SERVER['REQUEST_URI']);

/**
 * @var $router Routes
 */

try {
    $router = $di->get('movies\Framework\Routes');
    $router->process($route, $_POST);
} catch (Exception $e) {
    echo $e->getMessage();
}




