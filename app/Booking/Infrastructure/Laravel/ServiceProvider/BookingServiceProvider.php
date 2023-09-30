<?php

declare(strict_types=1);

namespace App\Booking\Infrastructure\Laravel\ServiceProvider;

use App\Booking\Domain\Repository\ReservationRepository;
use App\Booking\Infrastructure\Eloquent\Repository\EloquentReservationRepository;
use Illuminate\Support\ServiceProvider;

class BookingServiceProvider extends ServiceProvider
{
    public $bindings = [
        ReservationRepository::class => EloquentReservationRepository::class,
    ];
}
