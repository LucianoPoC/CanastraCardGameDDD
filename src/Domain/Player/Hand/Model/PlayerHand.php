<?php

declare(strict_types=1);

namespace App\Domain\Player\Hand\Model;

use App\Domain\Deck\Card;

/**
 * Class PlayerHand
 * @package App\Domain\Player
 */
class PlayerHand implements PlayerHandInterface
{
    /**
     * @var Card[]
     */
    private $cards;

    /**
     * @return Card[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * @param Card[] $cards
     * @return PlayerHandInterface
     */
    public function setCards(array $cards): PlayerHandInterface
    {
        $this->cards = $cards;
        return $this;
    }
}
