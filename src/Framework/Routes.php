<?php
declare(strict_types=1);

namespace movies\Framework;

use Exception;
use movies\Controllers\ActorController;
use movies\Controllers\ErrPageController;
use movies\Controllers\MovieController;

class Routes
{

    public function __construct(private readonly DiContainer $di)
    {
    }

    /**
     * @param string $route
     * @param array|null $request
     * @throws Exception
     */
    public function process(string $route, array $request = null): void
    {
        /**
         * @var ErrPageController $errPageController
         * @var ActorController $actorController
         * @var MovieController $movieController
         */

        $errPageController = $this->di->get('movies\Controllers\ErrPageController');
        $actorController = $this->di->get('movies\Controllers\ActorController');
        $movieController = $this->di->get('movies\Controllers\MovieController');

        switch ($route) {
            case '/':
                $actorController->displayAll();
                break;
            case '/search':
                $actorController->displaySearchResults($request);
                break;
            case str_starts_with($route, '/actor/'):
                $routeArray = explode('/', $route);
                $actorController->displayActorPage((int)$routeArray[2]);
                break;
            case str_starts_with($route, '/movie/'):
                $routeArray = explode('/', $route);
                $movieController->displayMoviePage((int)$routeArray[2]);
                break;
            case '/smart':
                require(__DIR__ . '/../Views/smarthome.tpl');
                break;
            case '/json':
                $actorController->getActorsJson($request);
                break;
            default:
                $errPageController->display();
                http_response_code(404);
                break;
        }
    }
}