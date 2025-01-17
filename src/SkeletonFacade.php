<?php

namespace Cion\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cion\Skeleton\SkeletonClass
 */
class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
