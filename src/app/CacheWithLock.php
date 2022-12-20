<?php

namespace Alitak\CacheWithLock\App;

class CacheWithLock
{
    /**
     * @param $key Name of the variable stored in cache
     * @param $callback Callback for creating the value
     * @param $lock_time Time to wait until the cache is created, block other processes
     * @param $ttl Time to lease the value in cache
     * @return mixed
     */
    public function remember(
        $key,
        $callback,
        $lock_time = 10,
        $ttl = null,
    ): mixed {
        return cache()
            ->lock($key.'_lock', $lock_time)
            ->block(
                $lock_time,
                fn () => cache()->remember($key, $ttl ?? config('cache.ttl'), $callback)
            );
    }
}
