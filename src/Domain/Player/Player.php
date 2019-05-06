<?php

declare(strict_types=1);

namespace App\Domain\Player;

use App\Domain\Player\Hand\Model\PlayerHandInterface;

/**
 * Class Player
 * @package App\Domain\Player
 */
class Player implements PlayerInterface
{
    /**
     * @var PlayerHandInterface
     */
    private $playerHand;

    /**
     * @return PlayerHandInterface
     */
    public function getPlayerHand(): PlayerHandInterface
    {
        return $this->playerHand;
    }

    /**
     * @param PlayerHandInterface $playerHand
     * @return PlayerInterface
     */
    public function setPlayerHand(PlayerHandInterface $playerHand): PlayerInterface
    {
        $this->playerHand = $playerHand;

        return $this;
    }
}
