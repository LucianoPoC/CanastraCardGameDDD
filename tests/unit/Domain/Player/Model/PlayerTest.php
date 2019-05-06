<?php

declare(strict_types=1);


use App\Domain\Player\Hand\Factory\PlayerHandFactory;
use App\Domain\Player\Player;
use PHPUnit\Framework\TestCase;

/**
 * Class PlayerTest
 */
class PlayerTest extends TestCase
{
    /**
     * @var Player
     */
    private $player;

    protected function setUp()
    {
        parent::setUp();

        $this->player = new Player();
    }

    public function testSetPlayerHandWithNoErrors(): void
    {
        $playerHandFactory = new PlayerHandFactory();
        $playerHand = $playerHandFactory->createNew();
        $playerHand->setCards(['foo' => 'bar']);
        
        $this->player->setPlayerHand($playerHand);

        $this->assertNotEmpty($this->player->getPlayerHand()->getCards());
    }

}