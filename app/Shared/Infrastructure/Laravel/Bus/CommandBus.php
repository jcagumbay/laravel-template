<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Laravel\Bus;

use App\Shared\Application\Command;
use App\Shared\Application\CommandHandler;
use App\Shared\Infrastructure\Laravel\Middleware\Bus\LogMiddleware;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CommandBus implements ShouldQueue
{
    use Dispatchable;
    use Queueable;

    private const CONNECTION_NAME = 'command-bus';

    public function __construct(private Command $command)
    {
    }

    public static function send(Command $command): void
    {
        self::dispatch($command)->onConnection(self::CONNECTION_NAME);
    }

    public function handle(Application $application): void
    {
        $commandHandler = sprintf('%sHandler', get_class($this->command));
        /** @var CommandHandler $handler */
        $handler = $application->make($commandHandler);
        $handler->handle($this->command);
    }

    public function middleware()
    {
        // You can add different middlewares here, such as DB transaction, logging, event dispatching after commit, etc.
        return [new LogMiddleware()];
    }
}
