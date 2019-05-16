<?php

declare(strict_types=1);

namespace App\Domain\Deck\Model;

use SplStack;

/**
 * Class Deck
 *
 * @package App\Domain\Deck
 */
final class Deck implements DeckInterface
{
    /**
     * @var SplStack
     */
    private $cards;

    /**
     * Deck constructor.
     */
    public function __construct()
    {
        $this->getNewStack();
        $values = array_merge([Value::ACE], range(2, 10), [Value::JACK, Value::QUEEN, Value::KING]);

        foreach (range(0, 1) as $deck) {
            foreach ([Suit::SPADES, Suit::HEARTS, Suit::DIAMONDS, Suit::CLUBS] as $suit) {
                foreach ($values as $value) {
                    $card = new Card();
                    $card->setSuit(new Suit($suit));
                    $card->setValue(new Value((string)$value));
                    $this->cards->push($card);
                }
            }
        }
    }

    /**
     * @return array
     */
    public function getCardsAsArray(): array
    {
        $data = [];
        foreach ($this->cards as $card) {
            $data[] = $card;
        }

        return $data;
    }

    /**
     * @return SplStack
     */
    public function getCards(): SplStack
    {
        return $this->cards;
    }

    /**
     * @param  SplStack $cards
     * @return DeckInterface
     */
    public function setCards(SplStack $cards): DeckInterface
    {
        $this->cards = $cards;

        return $this;
    }

    /**
     * @param  array $cards
     * @return DeckInterface
     */
    public function setCardsAsArray(array $cards): DeckInterface
    {
        $this->getNewStack();
        array_map(
            function ($item) {
                $this->cards[] = $item;
            },
            $cards
        );

        return $this;
    }

    private function getNewStack(): void
    {
        $this->cards = new SplStack();
    }
}
