<?php

namespace Alitak\CacheWithLock;

use Alitak\CacheWithLock\App\CacheWithLock;
use Illuminate\Support\ServiceProvider;

class CacheWithLockServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind('cache_with_lock', function () {
            return new CacheWithLock();
        });
    }
}
