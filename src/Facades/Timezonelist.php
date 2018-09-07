<?php

namespace Famdirksen\Timezonelist\Facades;

use Illuminate\Support\Facades\Facade;

class Timezonelist extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timezonelist';
    }
}
