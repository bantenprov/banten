<?php namespace Bantenprov\Banten\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Banten facade.
 *
 * @package Bantenprov\Banten
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Banten extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'banten';
    }
}
