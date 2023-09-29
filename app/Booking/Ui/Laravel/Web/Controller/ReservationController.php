<?php

declare(strict_types=1);

namespace App\Booking\Ui\Laravel\Web\Controller;

use App\Booking\Application\Command\MakeReservation;
use App\Shared\Infrastructure\Laravel\Bus\CommandBus;
use App\Shared\Ui\Laravel\Web\Controller\BaseController;
use DateTimeImmutable;

class ReservationController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        CommandBus::send(new MakeReservation(new DateTimeImmutable(), 2.0));

        return response('Request end.');
//        return view('chirps.index');
    }
}
