<?php

namespace App\Domain\Player\Factory;

use App\Domain\Player\PlayerInterface;

/**
 * Interface PlayerFactoryInterface
 * @package App\Domain\Player\Factory
 */
interface PlayerFactoryInterface
{
    /**
     * @return PlayerInterface
     */
    public function createNew(): PlayerInterface;
}
