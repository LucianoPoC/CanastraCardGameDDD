<?php

declare(strict_types=1);

namespace App\Domain\Deck;

use SplStack;

/**
 * Class Deck
 * @package App\Domain\Deck
 */
class Deck extends SplStack implements DeckInterface
{
    /**
     * @var Card[]
     */
    private $cards = [];

    /**
     * Deck constructor.
     */
    public function __construct()
    {
        $values = array_merge([Value::ACE], range(2, 10), [Value::JACK, Value::QUEEN, Value::KING]);

        foreach ([Suit::SPADES, Suit::HEARTS, Suit::DIAMONDS, Suit::CLUBS] as $suit) {
            foreach ($values as $value) {
                $this->cards[] = $value . $suit;
            }
        }
    }

    /**
     * Pops a node from the end of the doubly linked list
     * @link https://php.net/manual/en/spldoublylinkedlist.pop.php
     * @return mixed The value of the popped node.
     * @since 5.3.0
     */
    public function pop()
    {
        parent::pop();
        return array_pop($this->cards);
    }

    /**
     * @return array
     */
    public function getCards(): array
    {
        if (empty($this->cards)) {
            return ['foo' => 'bar'];
        }
        return $this->cards;
    }

    /**
     * @param array $cards
     * @return DeckInterface
     */
    public function setCars(array $cards): DeckInterface
    {
        $this->cards = $cards;
        return $this;
    }
}
