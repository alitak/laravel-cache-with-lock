<?php

if (! function_exists('cache_with_lock')) {
    function cache_with_lock()
    {
        $arguments = func_get_args();

        if (empty($arguments)) {
            return app('cache_with_lock');
        }

        if (isset($arguments[0]) && isset($arguments[1])) {
            return app('cache_with_lock')
                ->remember($arguments[0], $arguments[1], $arguments[2] ?? null, $arguments[3] ?? null);
        }
    }
}
