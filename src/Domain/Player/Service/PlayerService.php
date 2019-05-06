<?php

declare(strict_types=1);

namespace App\Domain\Player\Service;

use App\Domain\Deck\DeckInterface;
use App\Domain\Player\Hand\Factory\PlayerHandFactoryInterface;
use App\Domain\Player\PlayerInterface;

/**
 * Class PlayerService
 *
 * @package App\Domain\Player\Service
 */
class PlayerService implements PlayerServiceInterface
{
    /**
     * @var PlayerHandFactoryInterface
     */
    private $playerHandFactory;

    /**
     * PlayerService constructor.
     * @param PlayerHandFactoryInterface $playerHandFactory
     */
    public function __construct(
        PlayerHandFactoryInterface $playerHandFactory
    )
    {
        $this->playerHandFactory = $playerHandFactory;
    }

    /**
     * @param  PlayerInterface $player
     * @param  DeckInterface   $deck
     * @return PlayerServiceInterface
     */
    public function fillPlayerHand(PlayerInterface $player, DeckInterface $deck): PlayerServiceInterface
    {
        $playerHand = $this->playerHandFactory->createNew();
        $playerHand->setCards($deck->getCards());
        $player->setPlayerHand($playerHand);

        return $this;
    }
}
