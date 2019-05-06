<?php

declare(strict_types=1);

namespace App\Domain\Deck\Service;

use App\Domain\Deck\DeckInterface;

/**
 * Interface DeckServiceInterface
 *
 * @package App\Domain\Deck\Service
 */
interface DeckServiceInterface
{
    /**
     * @param  DeckInterface $deck
     * @return DeckInterface
     */
    public function shuffle(DeckInterface $deck): DeckInterface;

    /**
     * @param  DeckInterface $deck
     * @param  int           $quantity
     * @return array
     */
    public function getPieceOfCards(DeckInterface $deck, int $quantity = 11): array;
}
