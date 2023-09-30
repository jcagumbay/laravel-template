<?php

declare(strict_types=1);

namespace App\Booking\Domain\Repository;

use App\Booking\Domain\Reservation;

interface ReservationRepository
{
    public function save(Reservation $reservation): void;

    /**
     * @return Reservation[]
     */
    public function all(): array;
}
