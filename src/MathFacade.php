<?php

namespace Salfade\Math;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Salfade\Math\Math
 */
class MathFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'math';
    }
}
