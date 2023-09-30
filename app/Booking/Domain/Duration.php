<?php

declare(strict_types=1);

namespace App\Booking\Domain;

use App\Booking\Domain\Exception\InvalidDurationException;

class Duration
{
    private float $value;

    public function __construct(float $value)
    {
        if ($value < 0) {
            throw new InvalidDurationException();
        }

        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}
