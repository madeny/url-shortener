<?php

namespace madeny\UrlShortener\Facades;

use Illuminate\Support\Facades\Facade;

class UrlShortener extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'urlshortener';
    }

}
