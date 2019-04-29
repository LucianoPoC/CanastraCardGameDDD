<?php

namespace App\Domain\Deck\Service;

use App\Domain\Deck\Deck;
use App\Domain\Deck\DeckInterface;
use App\Domain\Deck\Factory\DeckFactory;
use App\Domain\Deck\Factory\DeckFactoryInterface;
use PHPUnit\Framework\TestCase;

class DeckServiceTest extends TestCase
{
    /**
     * @var DeckServiceInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    private $deckService;
    /**
     * @var DeckFactoryInterface
     */
    private $deckFactory;

    protected function setUp()
    {
        parent::setUp();

        $this->deckFactory = new DeckFactory();
        $this->deckService = new DeckService();
    }

    public function testShuffle()
    {
        $this->assertInstanceOf(DeckInterface::class, $this->deckService->shuffle($this->deckFactory->createNew()));
    }
}
