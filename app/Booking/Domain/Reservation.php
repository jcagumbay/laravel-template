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

    //    public function __construct(\DateTimeImmutable $reservationDate, Duration $duration)
    //    {
    //        parent::__construct();
    //
    //        $this->guarded['reservationDate'] = $reservationDate->format(\DateTimeInterface::ATOM);
    //        $this->guarded['duration'] = $duration->getValue();
    //    }

    public function getReservationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable($this->getAttribute('reservationDate'));
    }

    public function getDuration(): Duration
    {
        return new Duration($this->getAttribute('duration'));
    }
}
