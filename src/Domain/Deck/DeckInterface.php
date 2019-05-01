<?php

declare(strict_types=1);

namespace App\Domain\Deck;

interface DeckInterface
{
    public function getCards(): array;

    public function setCars(array $cards): self;
}
