<?php

declare(strict_types=1);

use App\Application;
use App\Exception\PlayersNotInitializadException;
use App\Factory\PlayerFactory;
use Behat\Behat\Context\Context;

class GameMatchContext implements Context
{

    private $application;

    public function __construct()
    {
        try {
            $this->application = new Application(
                new PlayerFactory()
            );


        } catch (PlayersNotInitializadException $e) {
        }
    }

    /**
     * @When /^the players are ready to start the match$/
     */
    public function thePlayersAreReadyToStartTheMatch()
    {

    }

    /**
     * @Then /^the dealer begins to distribute (\d+) cards for each player$/
     */
    public function theDealerBeginsToDistributeCardsForEachPlayer($arg1)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^(\d+) cards for each backup\-desk$/
     */
    public function cardsForEachBackupDesk($arg1)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^the match begins$/
     */
    public function theMatchBegins()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^one player should start by randomly election$/
     */
    public function onePlayerShouldStartByRandomlyElection()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}