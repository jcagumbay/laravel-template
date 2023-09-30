<?php

declare(strict_types=1);

namespace App\Booking\Domain;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [
        'reservationDate' => null,
        'duration' => null,
    ];

    public function start(\DateTimeImmutable $reservationDate, float $duration): self
    {
        $this->fill([
            'reservationDate' => $reservationDate->format(\DateTimeImmutable::ATOM),
            'duration' => (new Duration($duration))->getValue(),
        ]);

        return $this;
    }

    public function getReservationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable($this->getAttribute('reservationDate'));
    }

    public function getDuration(): Duration
    {
        return new Duration($this->getAttribute('duration'));
    }
}
