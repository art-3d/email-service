<?php
namespace Scutum\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FirstCommand extends Command
{
    protected function configure()
    {
        $this->setName('app:first')
            ->setDescription('This is first command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(['1', '2', '3']);
    }
}
