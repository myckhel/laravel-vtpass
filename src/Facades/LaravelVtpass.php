<?php

namespace Myckhel\Vtpass\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelVtpass extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vtpass';
    }
}
