<?php

declare(strict_types=1);

namespace App\Domain\Match\Factory;

use App\Domain\Match\Model\SecondHand;

/**
 * Class SecondHandFactory
 * @package App\Domain\Match\Factory
 */
class SecondHandFactory implements SecondHandFactoryInterface
{
    /**
     * @return SecondHand
     */
    public function createNew(): SecondHand
    {
        return new SecondHand();
    }
}