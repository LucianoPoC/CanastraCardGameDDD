<?php

namespace App\Domain\Player\Service;

use App\Domain\Deck\DeckInterface;
use App\Domain\Player\PlayerInterface;

interface PlayerServiceInterface
{
    public function fillPlayerHand(PlayerInterface $player, DeckInterface $deck);
}