<?php

declare(strict_types=1);

namespace App\Domain\Deck\Model;

/**
 * Class Card
 *
 * @package App\Domain\Deck
 */
class Card implements CardInterface
{
    /**
     * @var Suit
     */
    private $suit;

    /**
     * @var Value
     */
    private $value;

    /**
     * @return Suit
     */
    public function getSuit(): Suit
    {
        return $this->suit;
    }

    /**
     * @param  Suit $suit
     * @return Card
     */
    public function setSuit(Suit $suit): Card
    {
        $this->suit = $suit;
        return $this;
    }

    /**
     * @return Value
     */
    public function getValue(): Value
    {
        return $this->value;
    }

    /**
     * @param  Value $value
     * @return Card
     */
    public function setValue(Value $value): Card
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value->getValue() . $this->suit->getSuit();
    }
}
