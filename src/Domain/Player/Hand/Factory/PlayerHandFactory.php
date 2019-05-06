<?php

declare(strict_types=1);

namespace App\Domain\Player\Hand\Factory;

use App\Domain\Player\Hand\Model\PlayerHand;
use App\Domain\Player\Hand\Model\PlayerHandInterface;

/**
 * Class PlayerHandFactory
 * @package App\Domain\Player\Hand\Factory
 */
class PlayerHandFactory implements PlayerHandFactoryInterface
{

    /**
     * @return PlayerHandInterface
     */
    public function createNew(): PlayerHandInterface
    {
        return new PlayerHand();
    }
}