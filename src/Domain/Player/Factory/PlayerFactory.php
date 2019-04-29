<?php

declare(strict_types=1);

namespace App\Factory;

use App\Player;

class PlayerFactory implements PlayerFactoryInterface
{
    public function createNew(): PlayerInterface
    {
        return new Player();
    }
}