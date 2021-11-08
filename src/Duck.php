<?php

namespace Aviary;

use Exception;
use OverflowException;
use UnderflowException;

final class Duck extends Bird implements FlyableInterface, SwimableInterface
{
    const MAX_ALTITUDE = 500;
    const MAX_DEPTH = -5;

    private int $altitude = 0;

    public function getAltitude(): int
    {
        return $this->altitude < 0 ? 0 : $this->altitude;
    }

    public function getDepth(): int
    {
        return $this->altitude > 0 ? 0 : $this->altitude;
    }

    public function flyUp(): void
    {
        if ($this->altitude < 0) {
            throw new Exception('Le canard est en train de nager, il ne peut pas voler');
        }
        if ($this->altitude > self::MAX_ALTITUDE) {
            throw new OverflowException("Le canard essaie de voler trop haut");
        }
        $this->altitude += 5;
    }

    /**
     *
     * @throws UnderflowException altitude is too low
     */
    public function flyDown(): void
    {
        if ($this->altitude < 0) {
            throw new Exception('Le canard est en train de nager, il ne peut pas voler');
        }
        if ($this->altitude === 0) {
            throw new UnderflowException("Le canard est déjà au sol.");
        } else {
            $this->altitude -= 5;
        }
    }

    public function swimDown(): void
    {
        if ($this->altitude > 0) {
            throw new Exception('Le canard est en train de voler, il ne peut pas nager');
        }
        if ($this->altitude <= self::MAX_DEPTH) {
            throw new Exception('Le canard ne peut pas nager plus profondément');
        }
        $this->altitude -= 1;
    }

    public function swimUp(): void
    {
        if ($this->altitude >= 0) {
            throw new Exception('Le canard est déjà à la surface');
        }
        $this->depth -= 1;
    }
}
