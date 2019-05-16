<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\Deck\Model\DeckInterface;
use App\Domain\Deck\Exception\DeckEmptyException;
use App\Domain\Deck\Service\DeckServiceInterface;
use App\Domain\Match\Factory\SecondHandFactoryInterface;
use App\Domain\Match\Model\SecondHandInterface;
use App\Domain\Player\Exception\PlayersNotInitialisedException;
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
     * @var PlayerInterface[]
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
     * @var PlayerServiceInterface
     */
    private $playerService;
    /**
     * @var SecondHandInterface[]
     */
    private $secondHand;
    /**
     * @var SecondHandFactoryInterface
     */
    private $secondHandFactory;

    /**
     * Application constructor.
     *
     * @param PlayerFactoryInterface $playerFactory
     * @param PlayerServiceInterface $playerService
     * @param DeckServiceInterface $deckService
     * @param SecondHandFactoryInterface $secondHandFactory
     */
    public function __construct(
        PlayerFactoryInterface $playerFactory,
        PlayerServiceInterface $playerService,
        DeckServiceInterface $deckService,
        SecondHandFactoryInterface $secondHandFactory
    ) {
        $this->playerFactory = $playerFactory;
        $this->playerService = $playerService;
        $this->deckService = $deckService;
        $this->secondHandFactory = $secondHandFactory;

        $this->deckService->buildDeck();
    }

    /**
     *
     */
    public function buildPlayers(): void
    {
        foreach (range(1, 4) as $player) {
            $this->players[] = $this->playerFactory->createNew();
        }
    }

    /**
     * @param  DeckInterface $deck
     * @throws DeckEmptyException
     * @throws PlayersNotInitialisedException
     */
    public function distributePlayersCards(DeckInterface $deck): void
    {
        if ($deck->getCards()->isEmpty()) {
            throw new DeckEmptyException('Deck must be initialised before use');
        }

        if (empty($this->players)) {
            throw new PlayersNotInitialisedException('Player list is empty');
        }

        /** @var PlayerInterface $player */
        foreach ($this->players as $player) {
            $this->playerService->fillPlayerHand($player, $deck);
        }
    }

    /**
     * @param DeckInterface $deck
     */
    public function distributeSecondHandCards(DeckInterface $deck): void
    {
        foreach (range(1,2) as $index) {
            $secondHand = $this->secondHandFactory->createNew();
            $secondHand->setHand($this->deckService->getPieceOfCards($deck));
            $this->secondHand[] = $secondHand;
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
     * @return array
     */
    public function getSecondHand(): array
    {
        return $this->secondHand;
    }
}
