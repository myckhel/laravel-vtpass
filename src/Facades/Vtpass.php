<?php

namespace Myckhel\Vtpass\Facades;

use Illuminate\Support\Facades\Facade;


use Myckhel\Vtpass\Request;
use Myckhel\Vtpass\Traits\HasQuery;

class Vtpass extends Facade
{
    use Request, HasQuery;

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
