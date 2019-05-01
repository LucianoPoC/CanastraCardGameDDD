<?php

namespace App\Domain\Player\Factory;

use App\Domain\Player\PlayerInterface;

interface PlayerFactoryInterface
{
    public function createNew(): PlayerInterface;
}
