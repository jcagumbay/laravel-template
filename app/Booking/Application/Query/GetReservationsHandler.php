<?php

declare(strict_types=1);

namespace App\Booking\Application\Query;

use App\Booking\Domain\Repository\ReservationRepository;
use App\Booking\Domain\Reservation;
use App\Shared\Application\Query;
use App\Shared\Application\QueryHandler;

class GetReservationsHandler implements QueryHandler
{
    public function __construct(private ReservationRepository $reservationRepository)
    {
    }

    public function handle(Query|GetReservations $query): array
    {
        return array_map(
            fn (Reservation $reservation) => sprintf(
                'Reserved for %.2f hours at %s',
                $reservation->getDuration()->getValue(),
                $reservation->getReservationDate()->format(\DateTimeInterface::ATOM)
            ),
            $this->reservationRepository->all()
        );
    }
}
