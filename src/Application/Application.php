<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\Deck\DeckInterface;
use App\Domain\Deck\Factory\DeckFactoryInterface;
use App\Domain\Deck\Service\DeckServiceInterface;
use App\Domain\Player\Exception\PlayersNotInitializedException;
use App\Domain\Player\Factory\PlayerFactory;
use App\Domain\Player\Factory\PlayerFactoryInterface;
use App\Domain\Player\Service\PlayerServiceInterface;

class Application
{
    /**
     * @var array PlayerInterface[]
     */
    private $players = [];
    /**
     * @var PlayerFactory
     */
    private $playerFactory;
    /**
     * @var DeckServiceInterface
     */
    private $deckService;
    /**
     * @var DeckFactoryInterface
     */
    private $deckFactory;
    /**
     * @var PlayerServiceInterface
     */
    private $playerService;

    /**
     * Application constructor.
     * @param PlayerFactoryInterface $playerFactory
     * @param PlayerServiceInterface $playerService
     * @param DeckFactoryInterface $deckFactory
     * @param DeckServiceInterface $deckService
     * @throws PlayersNotInitializedException
     */
    public function __construct(
        PlayerFactoryInterface $playerFactory,
        PlayerServiceInterface $playerService,
        DeckFactoryInterface $deckFactory,
        DeckServiceInterface $deckService
    )
    {
        $this->playerFactory = $playerFactory;
        $this->playerService = $playerService;
        $this->deckFactory = $deckFactory;
        $this->deckService = $deckService;

        $deck = $this->deckFactory->createNew();

        $this->deckService->shuffle($deck);

        $this->buildPlayers();
        $this->distributeCards($deck);
    }

    private function buildPlayers(): void
    {
        foreach (range(1, 2) as $item) {
            $this->players[] = $this->playerFactory->createNew();
        }
    }

    /**
     * @param DeckInterface $deck
     * @throws PlayersNotInitializedException
     */
    public function distributeCards(DeckInterface $deck): void
    {
        if (empty($this->players)) {
            throw new PlayersNotInitializedException('Player list is empty');
        }

        foreach ($this->players as $player) {
            $this->playerService->fillPlayerHand($player, $deck);
        }
    }
}