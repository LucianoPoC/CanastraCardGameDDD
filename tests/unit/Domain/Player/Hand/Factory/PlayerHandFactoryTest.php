<?php

use App\Domain\Player\Factory\PlayerFactory;
use App\Domain\Player\Hand\Factory\PlayerHandFactory;
use App\Domain\Player\Hand\Factory\PlayerHandFactoryInterface;
use App\Domain\Player\Hand\Model\PlayerHandInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class PlayerFactoryTest
 */
class PlayerFactoryTest extends TestCase
{
    /**
     * @var PlayerHandFactoryInterface
     */
    private $factory;

    protected function setUp()
    {
        parent::setUp();

        $this->factory = new PlayerHandFactory();
    }

    public function testCreateNew(): void
    {
        $playerHand = $this->factory->createNew();

        $this->assertInstanceOf(PlayerHandInterface::class, $playerHand);
    }
}
