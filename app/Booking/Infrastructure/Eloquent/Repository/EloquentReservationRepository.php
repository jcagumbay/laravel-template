<?php

declare(strict_types=1);

namespace App\Booking\Infrastructure\Eloquent\Repository;

use App\Booking\Domain\Repository\ReservationRepository;
use App\Booking\Domain\Reservation;

class EloquentReservationRepository implements ReservationRepository
{
    public function save(Reservation $reservation): void
    {
        $reservation->save();
    }

    public function all(): array
    {
        return Reservation::all()->toArray();
    }
}
