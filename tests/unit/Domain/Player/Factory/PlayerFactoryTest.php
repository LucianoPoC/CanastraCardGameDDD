<?php

use App\Domain\Player\Factory\PlayerFactory;
use App\Domain\Player\Factory\PlayerFactoryInterface;
use App\Domain\Player\PlayerInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class PlayerHandFactoryTest
 */
class PlayerHandFactoryTest extends TestCase
{
    /**
     * @var PlayerHandFactoryInterface
     */
    private $factory;

    protected function setUp()
    {
        parent::setUp();

        $this->factory = new PlayerFactory();
    }

    public function testCreateNewDeck(): void
    {
        $deck = $this->factory->createNew();

        $this->assertInstanceOf(PlayerInterface::class, $deck);
    }
}
