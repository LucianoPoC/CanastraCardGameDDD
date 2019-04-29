<?php

declare(strict_types=1);

namespace App\Domain\Player;

interface PlayerInterface
{
    /**
     * @return PlayerHand
     */
    public function getPlayerHand(): PlayerHand;

    /**
     * @param PlayerHand $playerHand
     * @return PlayerInterface
     */
    public function setPlayerHand(PlayerHand $playerHand): PlayerInterface;

}