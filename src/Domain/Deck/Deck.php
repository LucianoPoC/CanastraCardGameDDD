<?php

declare(strict_types=1);

namespace App\Domain\Deck;

class Deck implements DeckInterface
{
    public const CLUBS = 0;
    public const DIAMONDS = 1;
    public const HEARTS = 2;
    public const SPADES = 3;

    private $cards = [];
    private $naips = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];
    private $numbers = [];

    /**
     * Deck constructor.
     */
    public function __construct()
    {
        foreach ($this->naips as $naip) {
            foreach (range(1, 13) as $number) {
                $this->cards[$naip][$number] = true;
            }
        }
    }
}