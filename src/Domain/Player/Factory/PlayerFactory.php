<?php

declare(strict_types=1);

namespace App\Domain\Player\Factory;

use App\Domain\Player\Player;
use App\Domain\Player\PlayerInterface;

class PlayerFactory implements PlayerFactoryInterface
{
    /**
     * @return PlayerInterface
     */
    public function createNew(): PlayerInterface
    {
        return new Player();
    }
}