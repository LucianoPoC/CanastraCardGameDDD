<?php

namespace App\Domain\Deck\Service;

use App\Domain\Deck\DeckInterface;
use App\Domain\Deck\Factory\DeckFactory;
use App\Domain\Deck\Factory\DeckFactoryInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class DeckServiceTest
 * @package App\Domain\Deck\Service
 */
class DeckServiceTest extends TestCase
{
    /**
     * @var DeckServiceInterface|MockObject
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

    public function testShuffle(): void
    {
        $this->assertInstanceOf(DeckInterface::class, $this->deckService->shuffle($this->deckFactory->createNew()));
    }

    public function testGetPieceOfCards(): void
    {
        $deck = $this->deckFactory->createNew();
        $cards = $this->deckService->getPieceOfCards($deck);

        $this->assertNotEmpty($cards);
        $this->assertIsArray($cards);
        $this->assertCount(11, $cards);

    }


}
