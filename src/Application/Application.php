<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\Deck\DeckInterface;
use App\Domain\Deck\Exception\DeckEmptyException;
use App\Domain\Deck\Factory\DeckFactoryInterface;
use App\Domain\Deck\Service\DeckServiceInterface;
use App\Domain\Player\Exception\PlayersNotInitialisedException;
use App\Domain\Player\Factory\PlayerFactory;
use App\Domain\Player\Factory\PlayerFactoryInterface;
use App\Domain\Player\PlayerInterface;
use App\Domain\Player\Service\PlayerServiceInterface;

/**
 * Class Application
 *
 * @package App\Application
 */
class Application
{
    /**
     * @var array PlayerInterface[]
     */
    private $players;
    /**
     * @var PlayerFactoryInterface
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
     *
     * @param PlayerFactoryInterface $playerFactory
     * @param PlayerServiceInterface $playerService
     * @param DeckFactoryInterface   $deckFactory
     * @param DeckServiceInterface   $deckService
     */
    public function __construct(
        PlayerFactoryInterface $playerFactory,
        PlayerServiceInterface $playerService,
        DeckFactoryInterface $deckFactory,
        DeckServiceInterface $deckService
    ) {
        $this->playerFactory = $playerFactory;
        $this->playerService = $playerService;
        $this->deckFactory = $deckFactory;
        $this->deckService = $deckService;

        $this->buildDeck();
    }

    /**
     *
     */
    public function buildPlayers(): void
    {
        foreach (range(1, 2) as $item) {
            $this->players[] = $this->playerFactory->createNew();
        }
    }

    /**
     * @param  DeckInterface $deck
     * @throws DeckEmptyException
     * @throws PlayersNotInitialisedException
     */
    public function distributeCards(DeckInterface $deck): void
    {
        if ($deck->getCards()->isEmpty()) {
            throw new DeckEmptyException('Deck must be initialised before use');
        }

        if (empty($this->players)) {
            throw new PlayersNotInitialisedException('Player list is empty');
        }

        /**
 * @var PlayerInterface $player 
*/
        foreach ($this->players as $player) {
            $this->playerService->fillPlayerHand($player, $deck);
        }
    }

    /**
     * @return array
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

    /**
     * @return DeckInterface
     */
    private function buildDeck(): DeckInterface
    {
        $deck = $this->deckFactory->createNew();

        $this->deckService->shuffle($deck);
        return $deck;
    }
}
