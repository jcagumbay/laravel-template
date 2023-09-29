<?php

declare(strict_types=1);

namespace App\Booking\Application\Query;

use App\Shared\Application\Query;
use App\Shared\Application\QueryHandler;

class GetReservationsHandler implements QueryHandler
{
    public function handle(Query|GetReservations $query): array
    {
        return [
            'Reservation 1',
        ];
    }
}
