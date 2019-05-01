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
        $cards = $deck->getCards();
        shuffle($cards);
        $deck->setCars($cards);

        return $deck;
    }
}
