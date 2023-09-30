<?php

declare(strict_types=1);

namespace App\Booking\Domain\Repository;

use App\Booking\Domain\Reservation;
use Illuminate\Database\Eloquent\Collection;

interface ReservationRepository
{
    public function save(Reservation $reservation): void;

    public function all(): Collection;
}
