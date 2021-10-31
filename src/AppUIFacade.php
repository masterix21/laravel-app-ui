<?php

namespace Masterix21\AppUI;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Masterix21\AppUI\AppUI
 */
class AppUIFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'appui';
    }
}
