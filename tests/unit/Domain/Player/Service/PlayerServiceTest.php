<?php

namespace App\Domain\Deck\Service;

use App\Domain\Deck\Deck;
use App\Domain\Deck\DeckInterface;
use App\Domain\Deck\Factory\DeckFactory;
use App\Domain\Deck\Factory\DeckFactoryInterface;
use App\Domain\Player\Factory\PlayerFactory;
use App\Domain\Player\Factory\PlayerFactoryInterface;
use App\Domain\Player\PlayerInterface;
use App\Domain\Player\Service\PlayerService;
use App\Domain\Player\Service\PlayerServiceInterface;
use PHPUnit\Framework\TestCase;

class PlayerServiceTest extends TestCase
{
    /**
     * @var PlayerServiceInterface
     */
    private $playerService;
    /**
     * @var PlayerFactoryInterface
     */
    private $playerFactory;

    protected function setUp()
    {
        parent::setUp();

        $this->playerFactory = new PlayerFactory();
        $this->playerService = new PlayerService();
    }
}
