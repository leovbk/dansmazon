<?php

namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\ORM\Tools\Console\Command\InfoCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Show information about mapped entities
 */
class InfoDoctrineCommand extends InfoCommand
{
    protected function configure(): void
    {
        $this
            ->setName('doctrine:mapping:info');

        if ($this->getDefinition()->hasOption('em')) {
            return;
        }

        $this->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        DoctrineCommandHelper::setApplicationEntityManager($this->getApplication(), $input->getOption('em'));

        return parent::execute($input, $output);
    }
}
