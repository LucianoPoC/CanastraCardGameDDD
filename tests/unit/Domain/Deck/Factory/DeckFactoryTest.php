<?php

use App\Domain\Deck\DeckInterface;
use App\Domain\Deck\Factory\DeckFactory;
use App\Domain\Deck\Factory\DeckFactoryInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class DeckFactoryTest
 */
class DeckFactoryTest extends TestCase
{
    /**
     * @var DeckFactoryInterface
     */
    private $factory;

    protected function setUp()
    {
        parent::setUp();

        $this->factory = new DeckFactory();
    }

    public function testCreateNewDeck(): void
    {
        $deck = $this->factory->createNew();

        $this->assertInstanceOf(DeckInterface::class, $deck);

        $this->assertNotEmpty($deck->getCards());
        $this->assertArrayHasKey(103, $deck->getCards());
    }
}
