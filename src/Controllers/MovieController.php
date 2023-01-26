<?php

namespace movies\Controllers;

use movies\Framework\DiContainer;
use movies\Repository\ActorRepository;
use movies\Repository\MovieRepository;
use Smarty;
use Exception, SmartyException;

class MovieController
{
    public function __construct(private readonly DiContainer $di)
    {
    }

    /**
     * @throws SmartyException
     * @throws Exception
     */
    public function displayMoviePage(int $id): void
    {
        /**
         * @var MovieRepository $movie
         * @var MovieRepository $inventory
         * @var ActorRepository $actors
         */
        $previous = "javascript:history.back()";
        $movie = $this->di->get('movies\Repository\MovieRepository')->getById($id);
        $actors = $this->di->get('\movies\Repository\ActorRepository')->getActorsByMovieId($id);
        $stores = $this->di->get('movies\Repository\MovieRepository')->getInventory($id);
        $smarty = new Smarty();
        $smarty->assign(['movie' => $movie, 'previous' => $previous, 'stores' => $stores, 'actors' => $actors]);
        $smarty->display(__DIR__ . '/../Views/movie.tpl');
    }
}