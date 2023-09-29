<?php

declare(strict_types=1);

namespace App\Booking\Application\Command;

use App\Shared\Application\Command;
use App\Shared\Application\CommandHandler;

class MakeReservationHandler implements CommandHandler
{
    /**
     * @param Command|MakeReservation $command
     */
    public function handle(Command $command): void
    {
        print sprintf(
            'Command is executed for reservation on %s for %.2f hours. <br/>',
            $command->getReservationDate()->format(\DateTimeInterface::ATOM),
            $command->getDuration()
        );
    }

}
