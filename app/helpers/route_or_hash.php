<?php
if (! function_exists('route_or_hash')) {
    /**
     * Return “#” if the current route matches, otherwise return the URL for the given route.
     *
     * @param  string  $name
     * @param  array   $params
     * @param  bool    $absolute
     * @return string
     */
    function route_or_hash(string $name, array $params = [], bool $absolute = true): string
    {
        return request()->routeIs($name)
            ? '#'
            : route($name, $params, $absolute);
    }
}
