<?php

declare(strict_types=1);

namespace App\Domain\Deck;

/**
 * Class Suit
 *
 * @package App\Domain\Deck
 */
class Suit
{
    private $suit = '';
    public const SPADES = '♤';
    public const HEARTS = '♡';
    public const DIAMONDS = '♢';
    public const CLUBS = '♧';

    /**
     * Suit constructor.
     *
     * @param string $suit
     */
    public function __construct(string $suit)
    {
        $this->suit = $suit;
    }

    /**
     * @param  mixed $suit
     * @return Suit
     */
    public function setSuit($suit): Suit
    {
        $this->suit = $suit;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->suit;
    }
}
