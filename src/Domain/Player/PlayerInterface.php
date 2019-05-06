<?php

declare(strict_types=1);

namespace App\Domain\Player;

use App\Domain\Player\Hand\Model\PlayerHandInterface;

/**
 * Interface PlayerInterface
 * @package App\Domain\Player
 */
interface PlayerInterface
{
    /**
     * @return PlayerHandInterface
     */
    public function getPlayerHand(): PlayerHandInterface;

    /**
     * @param  PlayerHandInterface $playerHand
     * @return PlayerInterface
     */
    public function setPlayerHand(PlayerHandInterface $playerHand): PlayerInterface;
}
