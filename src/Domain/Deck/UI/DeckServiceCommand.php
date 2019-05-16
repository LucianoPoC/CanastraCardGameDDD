<?php

declare(strict_types=1);

namespace App\Domain\Deck\UI;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class DeckServiceCommand
 * @package App\Domain\Deck\UI
 */
class DeckServiceCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Command');
    }

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('canastra:deck:service')
            // the short description shown while running "php bin/console list"
            ->setDescription('Fetch new comments from ads on Facebook and Instagram')
            // the "--help" option
            ->setHelp('Fetch new comments from ads on Facebook and Instagram');

        $this->addOption('debug', 'd', null, 'Enable the debug mode');
    }


}