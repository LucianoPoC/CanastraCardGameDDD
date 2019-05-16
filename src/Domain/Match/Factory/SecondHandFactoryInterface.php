<?php

namespace App\Domain\Match\Factory;


use App\Domain\Match\Model\SecondHand;

/**
 * Class SecondHandFactory
 * @package App\Domain\Match\Factory
 */
interface SecondHandFactoryInterface
{
    /**
     * @return SecondHand
     */
    public function createNew(): SecondHand;
}