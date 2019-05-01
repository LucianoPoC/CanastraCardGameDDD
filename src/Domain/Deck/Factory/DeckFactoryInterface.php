<?php

declare(strict_types=1);

namespace App\Domain\Deck\Factory;

use App\Domain\Deck\DeckInterface;

/**
 * Interface DeckFactoryInterface
 *
 * @package App\Domain\Deck\Factory
 */
interface DeckFactoryInterface
{
    /**
     * @return DeckInterface
     */
    public function createNew(): DeckInterface;
}
