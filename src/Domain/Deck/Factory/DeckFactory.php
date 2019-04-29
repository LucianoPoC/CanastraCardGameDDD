<?php

declare(strict_types=1);

namespace App\Domain\Deck\Factory;

use App\Domain\Deck\Deck;
use App\Domain\Deck\DeckInterface;

class DeckFactory implements DeckFactoryInterface
{
    public function createNew(): DeckInterface
    {
        return new Deck();
    }
}