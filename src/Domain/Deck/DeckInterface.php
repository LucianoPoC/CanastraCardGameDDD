<?php

declare(strict_types=1);

namespace App\Domain\Deck;

/**
 * Interface DeckInterface
 * @package App\Domain\Deck
 */
interface DeckInterface
{
    /**
     * @return array
     */
    public function getCards(): array;

    /**
     * @param array $cards
     * @return DeckInterface
     */
    public function setCars(array $cards): self;
}
