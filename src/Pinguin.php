<?php

namespace Aviary;

use Exception;

final class Pinguin extends Bird implements SwimableInterface
{
    const MAX_DEPTH = 30;

    private int $depth = 0;

    public function getDepth(): int
    {
        return $this->depth;
    }

    public function swimDown(): void
    {
        if ($this->depth > self::MAX_DEPTH) {
            throw new Exception('Le manchot ne peut pas nager plus profondément');
        }
        $this->depth += 10;
    }

    public function swimUp(): void
    {
        if ($this->depth === 0) {
            throw new Exception('Le manchot est déjà à la surface');
        }
        $this->depth -= 10;
    }
}
