<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Application\Application;
use App\Domain\Deck\Factory\DeckFactory;
use App\Domain\Deck\Service\DeckService;
use App\Domain\Player\Exception\PlayersNotInitializedException;
use App\Domain\Player\Factory\PlayerFactory;
use App\Domain\Player\Service\PlayerService;


try {
    $application = new Application(
        new PlayerFactory(),
        new PlayerService(),
        new DeckFactory(),
        new DeckService()
    );
} catch (PlayersNotInitializedException $e) {
    echo $e->getMessage();
}
