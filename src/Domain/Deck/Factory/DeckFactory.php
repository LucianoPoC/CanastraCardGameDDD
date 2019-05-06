<?php

declare(strict_types=1);

namespace App\Domain\Deck\Factory;

use App\Domain\Deck\Deck;
use App\Domain\Deck\DeckInterface;

/**
 * Class DeckFactory
 *
 * @package App\Domain\Deck\Factory
 */
class DeckFactory implements DeckFactoryInterface
{
    /**
     * @var Deck
     */
    private $deck;

    /**
     * @return DeckInterface
     */
    public function createNew(): DeckInterface
    {
        $this->deck = new Deck();
        return $this->builder();
    }

    /**
     * @return DeckInterface
     */
    private function builder(): DeckInterface
    {
        $this->deck->setCars(['foo' => 'bar']);
        return $this->deck;
    }
}
