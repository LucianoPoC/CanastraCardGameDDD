<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Application\Application;
use App\Domain\Deck\Exception\DeckEmptyException;
use App\Domain\Deck\Factory\DeckFactory;
use App\Domain\Deck\Service\DeckService;
use App\Domain\Match\Factory\SecondHandFactory;
use App\Domain\Match\Model\SecondHandInterface;
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
            new DeckService(
                new DeckFactory()
            )
        ),
        new DeckService(
            new DeckFactory()
        ),
        new SecondHandFactory()
    );

    $deckService = new DeckService(
        new DeckFactory()
    );

    $deck = $deckService->buildDeck();
    $application->buildPlayers();
    $application->distributePlayersCards($deck);
    /** @var PlayerInterface[] $players */
    $players = $application->getPlayers();
    foreach ($players as $index => $player) {
        echo "Player #${index} -" . $player->getPlayerHand();
    }
    echo '<br />';
    $application->distributeSecondHandCards($deck);

    /** @var SecondHandInterface[] $secondHand*/
    $secondHand = $application->getSecondHand();
    foreach ($secondHand as $index => $cards) {
        echo "Second hand #${index} - " . implode('|', $cards->getCards());
    }


} catch (PlayersNotInitialisedException $e) {
    echo $e->getMessage();
} catch (DeckEmptyException $e) {
    echo $e->getMessage();
}
