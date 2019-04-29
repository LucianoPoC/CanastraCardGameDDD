<?php

declare(strict_types=1);

namespace App;

class Player
{
    /** @var PlayerHand */
    private $playerHand = array();

    public function receiveCards(array $cards): void
    {
        $this->playerHand = $cards;
    }
}