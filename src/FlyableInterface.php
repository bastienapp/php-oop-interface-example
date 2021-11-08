<?php

namespace Aviary;

interface FlyableInterface
{
    public function getAltitude(): int;

    public function flyUp(): void;

    public function flyDown(): void;
}
