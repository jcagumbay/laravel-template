<?php

declare(strict_types=1);

namespace App\Shared\Application;

interface QueryHandler
{
    public function handle(Query $query): mixed;
}
