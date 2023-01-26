<?php
declare(strict_types=1);

namespace movies\Controllers;

use movies\Framework\DiContainer;
use movies\Repository\ActorRepository;
use movies\Repository\MovieRepository;
use Smarty;
use Exception, SmartyException;

class ActorController
{
    public function __construct(private readonly DiContainer $di)
    {
    }

    /**
     * @throws Exception
     * @throws SmartyException
     * @var ActorRepository $actors
     */
    public function displayAll(): void
    {
        /**
         * @var ActorRepository $actors
         */

        $actors = $this->di->get('movies\Repository\ActorRepository')->getAll();
        $smarty = new Smarty();
        $smarty->assign('actors', $actors);
        $smarty->display(__DIR__ . '/../Views/home.tpl');
    }

    /**
     * @throws SmartyException
     * @throws Exception
     */
    public function displaySearchResults(array $request): void
    {
        /**
         * @var ActorRepository $actors
         */
        $smarty = new Smarty();
        if ($this->di->get('movies\Framework\Validator')->validateSearchText($request['search_text'])) {
            $actors = $this->di->get('movies\Repository\ActorRepository')->getSearchResult($request['search_text']);
            $previous = "javascript:history.back()";
            $smarty->assign(['actors' => $actors, 'previous' => $previous, 'searchText' => $request['search_text']]);
            $smarty->display(__DIR__ . '/../Views/home.tpl');
        } else {
            header('Location: /paskaitos/sql/38p/movies');
        }
    }

    /**
     * @throws SmartyException
     * @throws Exception
     */
    public function displayActorPage(int $id): void
    {
        /**
         * @var ActorRepository $actor
         * @var MovieRepository $actorMovieList
         */
        $previous = "javascript:history.back()";
        $actor = $this->di->get('movies\Repository\ActorRepository')->getById($id);
        $actorMovieList = $this->di->get('\movies\Repository\MovieRepository')->getByActorId($id);
        $smarty = new Smarty();
        $smarty->assign(['actor' => $actor, 'movieList' => $actorMovieList, 'previous' => $previous]);
        $smarty->display(__DIR__ . '/../Views/actor.tpl');
    }

    /**
     * @throws SmartyException
     */
    public function displaySmartSearch(): void
    {
        $smarty = new Smarty();
        $smarty->display(__DIR__ . '/../Views/smarthome.tpl');
    }

    /**
     * @throws Exception
     */
    public function jsEndPoint(string $searchText): void
    {
        /**
         * @var ActorRepository $actorRepository
         */
        $actorRepository = $this->di->get('movies\Repository\ActorRepository');
        echo $actorRepository->getActorsJson($searchText);
    }
}