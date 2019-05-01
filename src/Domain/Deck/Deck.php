<?php

declare(strict_types=1);

namespace App\Domain\Deck;

use SplStack;

class Deck extends SplStack implements DeckInterface
{
    /**
     * @var Card[]
     */
    private $cards = [];

    public function __construct()
    {
        $values = array_merge([Value::ACE], range(2, 10), [Value::JACK, Value::QUEEN, Value::KING]);

        foreach ([Suit::SPADES, Suit::HEARTS, Suit::DIAMONDS, Suit::CLUBS] as $suit) {
            foreach ($values as $value) {
                $this->cards[] = $value . $suit;
            }
        }
    }

    public function pop()
    {
        parent::pop();
        return array_pop($this->cards);
    }


    public function getCards(): array
    {
        return $this->cards;
    }

    public function setCars(array $cards): DeckInterface
    {
        $this->cards = $cards;
        return $this;
    }
}
