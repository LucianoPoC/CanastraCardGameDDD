<?php

declare(strict_types=1);

namespace App;

use App\Factory\PlayerFactory;
use App\Exception\PlayersNotInitializadException;
use App\Service\DeckServiceInterface;

class Application
{
    private $deck;
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
     * Application constructor.
     * @param PlayerFactory $playerFactory
     * @throws PlayersNotInitializadException
     */
    public function __construct(
        PlayerFactory $playerFactory,
        DeckFactoryInterface $deckFactory,
        DeckServiceInterface $deckService
    )
    {
        $this->playerFactory = $playerFactory;

        $this->deckService->shuffle();
        $this->buildPlayers();
        $this->fillPlayersHand();

        $this->deckService = $deckService;
        $this->deckFactory = $deckFactory;
    }

    private function buildPlayers(): void
    {
        foreach (range(1, 2) as $players) {
            $players[] = $this->playerFactory->createNew();
        }
    }

    /**
     * @throws PlayersNotInitializadException
     */
    public function fillPlayersHand(): void
    {
        if (null === $this->players) {
            throw new PlayersNotInitializadException('Player list is empty');
        }

        foreach ($this->players as $player) {
            $player->receiveCards();
        }
    }
}