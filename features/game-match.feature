Feature: Game match
  Background: 2 players will play a new match
  Scenario: The match will start between 2 players
    When the players are ready to start the match
    Then the dealer begins to distribute 11 cards for each player
    And 11 cards for each backup-desk

  Scenario: Elect a player to start the match
    When the match begins
    Then one player should start by randomly election