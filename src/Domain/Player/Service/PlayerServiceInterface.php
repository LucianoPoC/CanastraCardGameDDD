<?php

namespace App\Domain\Player\Service;

use App\Domain\Deck\Model\DeckInterface;
use App\Domain\Player\PlayerInterface;

/**
 * Interface PlayerServiceInterface
 *
 * @package App\Domain\Player\Service
 */
interface PlayerServiceInterface
{
    /**
     * @param  PlayerInterface $player
     * @param  DeckInterface   $deck
     * @return PlayerServiceInterface
     */
    public function fillPlayerHand(PlayerInterface $player, DeckInterface $deck): self;
}
