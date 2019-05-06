<?php

declare(strict_types=1);

namespace App\Domain\Player\Service;

use App\Domain\Deck\DeckInterface;
use App\Domain\Deck\Service\DeckServiceInterface;
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
     * @var DeckServiceInterface
     */
    private $deckService;

    /**
     * PlayerService constructor.
     *
     * @param PlayerHandFactoryInterface $playerHandFactory
     * @param DeckServiceInterface       $deckService
     */
    public function __construct(
        PlayerHandFactoryInterface $playerHandFactory,
        DeckServiceInterface $deckService
    ) {
        $this->playerHandFactory = $playerHandFactory;
        $this->deckService = $deckService;
    }

    /**
     * @param PlayerInterface $player
     * @param DeckInterface $deck
     * @return PlayerServiceInterface
     */
    public function fillPlayerHand(PlayerInterface $player, DeckInterface $deck): PlayerServiceInterface
    {
        $playerHand = $this->playerHandFactory->createNew();
        $playerHand->setCards($this->deckService->getPieceOfCards($deck));
        $player->setPlayerHand($playerHand);

        return $this;
    }
}
