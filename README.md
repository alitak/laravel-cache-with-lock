# Laravel Cache With Lock

A package to prevent parallel cache creating problem.

## Usage
    \Alitak\CacheWithLock\Facades\CacheWithLock::remember('foo, fn () => 'bar');

    cache_with_lock()->remember('foo, fn () => 'bar');

    cache_with_lock('foo, fn () => 'bar');

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
    ): mixed
