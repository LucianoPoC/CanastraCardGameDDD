<?php

namespace App\Domain\Match\Model;

/**
 * Interface SecondHandInterface
 * @package App\Domain\Match\Model
 */
interface SecondHandInterface
{

    /**
     * @param array $cards
     * @return SecondHandInterface
     */
    public function setHand(array $cards): SecondHandInterface;

    /**
     * @return array
     */
    public function getCards(): array;
}