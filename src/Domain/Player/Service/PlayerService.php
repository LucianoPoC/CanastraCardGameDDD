<?php

declare(strict_types=1);

namespace App\Domain\Player\Service;

use App\Domain\Deck\DeckInterface;
use App\Domain\Player\PlayerInterface;

/**
 * Class PlayerService
 *
 * @package App\Domain\Player\Service
 */
class PlayerService implements PlayerServiceInterface
{
    /**
     * @param  PlayerInterface $player
     * @param  DeckInterface   $deck
     * @return PlayerServiceInterface
     */
    public function fillPlayerHand(PlayerInterface $player, DeckInterface $deck): PlayerServiceInterface
    {
        $player->setPlayerHand();
    }
}
