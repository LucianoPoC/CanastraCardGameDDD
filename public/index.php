<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Application\Application;
use App\Domain\Deck\Factory\DeckFactory;
use App\Domain\Deck\Service\DeckService;
use App\Domain\Player\Exception\PlayersNotInitialisedException;
use App\Domain\Player\Factory\PlayerFactory;
use App\Domain\Player\Hand\Factory\PlayerHandFactory;
use App\Domain\Player\PlayerInterface;
use App\Domain\Player\Service\PlayerService;


try {
    $application = new Application(
        new PlayerFactory(),
        new PlayerService(
            new PlayerHandFactory(),
            new DeckService()
        ),
        new DeckFactory(),
        new DeckService()
    );

    $deckFactory = new DeckFactory();
    $deck = $deckFactory->createNew();
    $deckService = new DeckService();
    $deck = $deckService->shuffle($deck);
    $application->buildPlayers();
    $application->distributeCards($deck);
    /** @var PlayerInterface[] $players */
    $players = $application->getPlayers();
    var_dump($players[0]->getPlayerHand()->getCards());
} catch (PlayersNotInitialisedException $e) {
    echo $e->getMessage();
}
