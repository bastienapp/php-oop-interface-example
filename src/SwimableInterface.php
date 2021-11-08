<?php

namespace Aviary;

interface SwimableInterface
{
    public function getDepth(): int;

    public function swimDown(): void;

    public function swimUp(): void;
}
