<?php

namespace movies\Controllers;

use Smarty;
use SmartyException;

class ErrPageController
{
    /**
     * @throws SmartyException
     */
    public function display(): void
    {
        $smarty = new Smarty();
        $smarty->display(__DIR__ . '/../Views/404.tpl');
    }
}