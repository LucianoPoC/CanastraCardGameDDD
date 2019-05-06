<?php

declare(strict_types=1);

namespace App\Domain\Player\Hand\Factory;

use App\Domain\Player\Hand\Model\PlayerHandInterface;

/**
 * Interface PlayerHandFactoryInterface
 *
 * @package App\Domain\Player\Hand\Factory
 */
interface PlayerHandFactoryInterface
{
    /**
     * @return PlayerHandInterface
     */
    public function createNew(): PlayerHandInterface;
}
