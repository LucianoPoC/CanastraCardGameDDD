<?php

namespace App\Application;


use App\Domain\Deck\Deck;
use App\Domain\Deck\Factory\DeckFactory;
use App\Domain\Deck\Factory\DeckFactoryInterface;
use App\Domain\Deck\Service\DeckService;
use App\Domain\Deck\Service\DeckServiceInterface;
use App\Domain\Player\Exception\PlayersNotInitialisedException;
use App\Domain\Player\Factory\PlayerFactory;
use App\Domain\Player\Factory\PlayerFactoryInterface;
use App\Domain\Player\Hand\Factory\PlayerHandFactory;
use App\Domain\Player\PlayerInterface;
use App\Domain\Player\Service\PlayerServiceInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationTest
 * @package App\Application
 */
class ApplicationTest extends TestCase
{
    /**
     * @var Application
     */
    private $app;

    protected function setUp()
    {
        parent::setUp();

        $this->app = new Application(
            $this->createMock(PlayerFactoryInterface::class),
            $this->createMock(PlayerServiceInterface::class),
            $this->createMock(DeckFactoryInterface::class),
            $this->createMock(DeckServiceInterface::class)
        );
    }

    public function testBuildPlayersWithNoErrors(): void
    {
        $this->app->buildPlayers();

        $this->assertNotNull($this->app->getPlayers());
    }

//    public function testDistributeCardsWithNoErrors(): void
//    {
//        $deckFactory = new DeckFactory();
//        $deck = $deckFactory->createNew();
//        $deckService = new DeckService();
//        $deckService->shuffle($deck);
//        $this->app->buildPlayers();
//        $this->app->distributeCards($deck);
//
//
//
//        $playerHandFactory = new PlayerHandFactory();
//        $playerHand = $playerHandFactory->createNew();
//        $playerHand->setCards(['foo' => 'bar']);
//
//
//        $playerFactory = new PlayerFactory();
//        /** @var PlayerInterface[] $players */
//        $players = $this->app->getPlayers();
//        $player = $players[0];
//
//        $player = $playerFactory->createNew();
//        $player->setPlayerHand($playerHand);

//var_dump($player->getPlayerHand()->getCards(), $playerHand->getCards(), $player->getPlayerHand() === $playerHand);exit;

//        $this->assertNotEmpty($player->getPlayerHand()->getCards());
//    }
//
//    public function testDistributeCardsWithNoErrors1(): void
//    {
//        $deckFactory = new DeckFactory();
//        $deck = $deckFactory->createNew();
//        $deckService = new DeckService();
//        $deckService->shuffle($deck);
//        $this->app->buildPlayers();
//        $this->app->distributeCards($deck);
//
//
//
//        $playerHandFactory = new PlayerHandFactory();
//        $playerHand = $playerHandFactory->createNew();
//        $playerHand->setCards(['foo' => 'bar']);
//
//
//        $playerFactory = new PlayerFactory();
//        /** @var PlayerInterface[] $players */
//        $players = $this->app->getPlayers();
//        $player = $players[0];
//
//        $player = $playerFactory->createNew();
//        $player->setPlayerHand($playerHand);
//
//        var_dump($player->getPlayerHand()->getCards(), $playerHand->getCards(), $player->getPlayerHand() === $playerHand);exit;
//
//        $this->assertNotEmpty($player->getPlayerHand()->getCards());
//    }

    public function testDistributeCardsWithPlayerNotInitialisedException(): void
    {
        $this->expectException(PlayersNotInitialisedException::class);
        $deckFactory = new DeckFactory();
        $this->app->distributePlayersCards($deckFactory->createNew());
    }
}
