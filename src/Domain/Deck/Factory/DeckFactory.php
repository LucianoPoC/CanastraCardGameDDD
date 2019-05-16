<?php

declare(strict_types=1);

namespace App\Domain\Deck\Factory;

use App\Domain\Deck\Model\Deck;
use App\Domain\Deck\Model\DeckInterface;

/**
 * Class DeckFactory
 *
 * @package App\Domain\Deck\Factory
 */
class DeckFactory implements DeckFactoryInterface
{
    /**
     * @return DeckInterface
     */
    public function createNew(): DeckInterface
    {
        return new Deck();
    }
}
