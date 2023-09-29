<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Laravel\Bus;

use App\Shared\Application\Query;
use App\Shared\Application\QueryHandler;

class QueryBus
{
    public static function send(Query $query): mixed
    {
        $queryHandlerFQCN = sprintf('%sHandler', get_class($query));
        /** @var QueryHandler $queryHandler */
        $queryHandler = app($queryHandlerFQCN);

        return $queryHandler->handle($query);
    }
}
