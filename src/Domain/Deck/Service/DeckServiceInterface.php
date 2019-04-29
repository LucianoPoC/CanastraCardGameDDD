<?php

declare(strict_types=1);

namespace App\Domain\Deck\Service;

use App\Domain\Deck\DeckInterface;

interface DeckServiceInterface
{
    public function shuffle(DeckInterface $deck): DeckInterface;
}