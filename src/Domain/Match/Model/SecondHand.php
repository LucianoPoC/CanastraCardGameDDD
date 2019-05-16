<?php

declare(strict_types=1);

namespace App\Domain\Match\Model;


use App\Domain\Deck\Model\CardInterface;

/**
 * Class SecondHand
 * @package App\Domain\Match\Model
 */
class SecondHand implements SecondHandInterface
{
    /** @var CardInterface[] */
    private $cards = [];

    /**
     * @param array $cards
     * @return SecondHandInterface
     */
    public function setHand(array $cards): SecondHandInterface
    {
        $this->cards = $cards;
        return $this;
    }

    /**
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }
}