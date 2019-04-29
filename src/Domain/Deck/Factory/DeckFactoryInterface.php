<?php

declare(strict_types=1);

namespace App\Domain\Deck\Factory;

use App\Domain\Deck\DeckInterface;

interface DeckFactoryInterface
{
    public function createNew(): DeckInterface;
}