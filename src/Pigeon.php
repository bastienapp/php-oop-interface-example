<?php

namespace Aviary;

use OverflowException;
use UnderflowException;

final class Pigeon extends Bird implements FlyableInterface
{
    const MAX_ALTITUDE = 2000;

    private int $altitude = 0;

    public function getAltitude(): int
    {
        return $this->altitude;
    }

    public function flyUp(): void
    {
        if ($this->altitude > self::MAX_ALTITUDE) {
            throw new OverflowException("Le pigeon essaie de voler trop haut");
        }
        $this->altitude += 10;
    }

    /**
     *
     * @throws UnderflowException altitude is too low
     */
    public function flyDown(): void
    {
        if ($this->altitude === 0) {
            throw new UnderflowException("Le pigeon est déjà au sol.");
        } else {
            $this->altitude -= 10;
        }
    }
}
