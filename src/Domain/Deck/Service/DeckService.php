<?php

declare(strict_types=1);

namespace App\Domain\Deck\Service;

use App\Domain\Deck\Model\DeckInterface;
use App\Domain\Deck\Factory\DeckFactoryInterface;

/**
 * Class DeckService
 *
 * @package App\Domain\Deck\Service
 */
class DeckService implements DeckServiceInterface
{
    /**
     * @var DeckFactoryInterface
     */
    private $deckFactory;

    /**
     * DeckService constructor.
     * @param DeckFactoryInterface $deckFactory
     */
    public function __construct(DeckFactoryInterface $deckFactory)
    {
        $this->deckFactory = $deckFactory;
    }

    /**
     * @return DeckInterface
     */
    public function buildDeck(): DeckInterface
    {
        $deck = $this->deckFactory->createNew();
        $this->shuffle($deck);

        return $deck;
    }

    /**
     * @param  DeckInterface $deck
     * @return DeckInterface
     */
    public function shuffle(?DeckInterface $deck = null): DeckInterface
    {
        if (!$deck instanceof DeckInterface) {
            $deck = $this->deckFactory->createNew();
        }

        $cards = $deck->getCardsAsArray();
        shuffle($cards);
        $deck->setCardsAsArray($cards);

        return $deck;
    }

    /**
     * @param  DeckInterface $deck
     * @param  int           $quantity
     * @return array
     */
    public function getPieceOfCards(DeckInterface $deck, int $quantity = 11): array
    {
        $cards = [];
        foreach (range(1, $quantity) as $item) {
            $cards[] = $deck->getCards()->pop();
        }

        return $cards;
    }
}
