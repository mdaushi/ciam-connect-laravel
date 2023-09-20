<?php

namespace Mdaushi\CiamConnectLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mdaushi\CiamConnectLaravel\CiamConnectLaravel
 */
class CiamConnectLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mdaushi\CiamConnectLaravel\CiamConnectLaravel::class;
    }
}
