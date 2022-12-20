<?php

namespace Alitak\CacheWithLock\Facades;

use Illuminate\Support\Facades\Facade;

class CacheWithLock extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'cache_with_lock';
    }
}
