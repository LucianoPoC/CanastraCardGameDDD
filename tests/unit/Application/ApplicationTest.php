<?php

namespace App\Application;


use App\Domain\Deck\Factory\DeckFactoryInterface;
use App\Domain\Deck\Service\DeckServiceInterface;
use App\Domain\Player\Exception\PlayersNotInitializedException;
use App\Domain\Player\Factory\PlayerFactoryInterface;
use App\Domain\Player\Service\PlayerServiceInterface;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testCreateNewApplication()
    {
        try {
            $app = new Application(
                $this->createMock(PlayerFactoryInterface::class),
                $this->createMock(PlayerServiceInterface::class),
                $this->createMock(DeckFactoryInterface::class),
                $this->createMock(DeckServiceInterface::class)
            );

            $this->assertInstanceOf(Application::class, $app);
        } catch (PlayersNotInitializedException $e) {
        }
    }
}
