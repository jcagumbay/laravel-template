<?php

declare(strict_types=1);

namespace App\Booking\Application\Command;

use App\Booking\Domain\Duration;
use App\Booking\Domain\Repository\ReservationRepository;
use App\Booking\Domain\Reservation;
use App\Shared\Application\Command;
use App\Shared\Application\CommandHandler;

class MakeReservationHandler implements CommandHandler
{
    public function __construct(private ReservationRepository $reservationRepository)
    {
    }

    /**
     * @param Command|MakeReservation $command
     */
    public function handle(Command $command): void
    {
        $reservation = new Reservation($command->getReservationDate(), new Duration($command->getDuration()));
        $this->reservationRepository->save($reservation);
    }
}
