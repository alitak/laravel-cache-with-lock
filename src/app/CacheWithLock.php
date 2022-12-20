<?php

namespace Alitak\CacheWithLock\App;

class CacheWithLock
{
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
