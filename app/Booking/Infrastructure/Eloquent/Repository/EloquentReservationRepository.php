<?php

declare(strict_types=1);

namespace App\Booking\Infrastructure\Eloquent\Repository;

use App\Booking\Domain\Repository\ReservationRepository;
use App\Booking\Domain\Reservation;
use Illuminate\Database\Eloquent\Collection;

class EloquentReservationRepository implements ReservationRepository
{
    public function save(Reservation $reservation): void
    {
        $reservation->save();
    }

    public function all(): Collection
    {
        return Reservation::all();
    }
}
