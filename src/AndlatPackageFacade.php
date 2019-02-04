<?php

namespace Andrealatini\AndlatPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Andrealatini\AndlatPackage\Skeleton\SkeletonClass
 */
class AndlatPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'andlat-package';
    }
}
