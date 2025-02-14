<?php

namespace Core\Middleware;

class Middleware
{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class,
    ];

    public static function resolve($key)
    {
        if (!$key) return;

        $middleware = self::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("Middleware not found in $key #Yeet!");
        };

        (new $middleware)->handle();
    }
}