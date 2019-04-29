<?php

declare(strict_types=1);

namespace App\Domain\Player;

class Player implements PlayerInterface
{
    /** @var PlayerHand */
    private $playerHand = array();

    /**
     * @return PlayerHand
     */
    public function getPlayerHand(): PlayerHand
    {
        return $this->playerHand;
    }

    /**
     * @param PlayerHand $playerHand
     * @return PlayerInterface
     */
    public function setPlayerHand(PlayerHand $playerHand): PlayerInterface
    {
        $this->playerHand = $playerHand;
    }
}