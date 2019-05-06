<?php

declare(strict_types=1);

namespace App\Domain\Deck\Service;

use App\Domain\Deck\DeckInterface;

/**
 * Class DeckService
 *
 * @package App\Domain\Deck\Service
 */
class DeckService implements DeckServiceInterface
{
    /**
     * @param  DeckInterface $deck
     * @return DeckInterface
     */
    public function shuffle(DeckInterface $deck): DeckInterface
    {
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
