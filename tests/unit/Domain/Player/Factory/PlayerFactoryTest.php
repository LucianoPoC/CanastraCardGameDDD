<?php

use App\Domain\Player\Factory\PlayerFactory;
use App\Domain\Player\Factory\PlayerFactoryInterface;
use App\Domain\Player\PlayerInterface;
use PHPUnit\Framework\TestCase;

class PlayerFactoryTest extends TestCase
{
    /**
     * @var PlayerFactoryInterface
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
