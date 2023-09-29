<?php
declare(strict_types=1);

namespace App\Booking\Application\Command;

use App\Shared\Application\Command;
use DateTimeImmutable;

class MakeReservation implements Command
{
    public function __construct(private DateTimeImmutable $reservationDate, private float $duration)
    {
    }

    public function getReservationDate(): DateTimeImmutable
    {
        return $this->reservationDate;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }
}
