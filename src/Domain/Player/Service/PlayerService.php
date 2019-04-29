<?php

declare(strict_types=1);

namespace App\Domain\Player\Service;

use App\Domain\Deck\DeckInterface;
use App\Domain\Player\PlayerHand;
use App\Domain\Player\PlayerInterface;

class PlayerService implements PlayerServiceInterface
{
    public function fillPlayerHand(PlayerInterface $player, DeckInterface $deck)
    {
        $player->setPlayerHand(new PlayerHand());
    }
}