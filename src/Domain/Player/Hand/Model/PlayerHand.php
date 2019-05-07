<?php

declare(strict_types=1);

namespace App\Domain\Player\Hand\Model;

use App\Domain\Deck\Card;
use App\Domain\Deck\CardInterface;

/**
 * Class PlayerHand
 *
 * @package App\Domain\Player
 */
class PlayerHand implements PlayerHandInterface
{
    /**
     * @var Card[]
     */
    private $cards = [];

    /**
     * @return Card[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * @param  Card[] $cards
     * @return PlayerHandInterface
     */
    public function setCards(array $cards): PlayerHandInterface
    {
        $this->cards = $cards;
        return $this;
    }

    public function addCard(CardInterface $card): PlayerHandInterface
    {
        $this->cards[] = $card;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $output = '';
        foreach ($this->cards as $card) {
            $output .= $card->getValue() . $card->getSuit() . '|';
        }

        return $output;
    }
}
