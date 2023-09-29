<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Laravel\Middleware\Bus;

use Closure;

class LogMiddleware
{
    public function handle(object $job, Closure $next): void
    {
        print 'I am a logger middleware which can be optionally used on your command bus.<br/>';

        $next($job);
    }
}
