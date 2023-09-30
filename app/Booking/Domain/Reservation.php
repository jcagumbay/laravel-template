<?php

namespace App\Booking\Domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

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
