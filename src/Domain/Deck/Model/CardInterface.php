<?php

namespace App\Domain\Deck\Model;

/**
 * Class Card
 *
 * @package App\Domain\Deck
 */
interface CardInterface
{
    /**
     * @return Suit
     */
    public function getSuit(): Suit;

    /**
     * @param  Suit $suit
     * @return Card
     */
    public function setSuit(Suit $suit): Card;

    /**
     * @return Value
     */
    public function getValue(): Value;

    /**
     * @param  Value $value
     * @return Card
     */
    public function setValue(Value $value): Card;

    /**
     * @return string
     */
    public function __toString(): string;
}
