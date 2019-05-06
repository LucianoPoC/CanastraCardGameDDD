<?php

declare(strict_types=1);

namespace App\Domain\Deck;

use SplStack;

/**
 * Interface DeckInterface
 * @package App\Domain\Deck
 */
interface DeckInterface
{
    /**
     * @return SplStack
     */
    public function getCards(): SplStack;

    /**
     * @return array
     */
    public function getCardsAsArray(): array;

    /**
     * @param SplStack $cards
     * @return DeckInterface
     */
    public function setCards(SplStack $cards): self;

    /**
     * @param array $cards
     * @return DeckInterface
     */
    public function setCardsAsArray(array $cards): self;
}
