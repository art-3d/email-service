<?php
namespace Scutum\Applications;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Silex\Provider\DoctrineServiceProvider;
use Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider;
use Symfony\Component\Console\Application as Console;
use Doctrine\ORM\Tools\Console\ConsoleRunner as ORMConsoleRunner;
use Doctrine\DBAL\Tools\Console\ConsoleRunner as DBALConsoleRunner;

use Scutum\Commands\FirstCommand;

class ConsoleApplication extends Application
{
    public function run(Request $request = null)
    {
        throw new \RuntimeException();
    }

    public function runCli(InputInterface $input = null, OutputInterface $output = null)
    {
        $this->registerServices()
            ->registerCommands();

        $this['console']->run($input, $output);
    }

    public function registerServices(): Application
    {
        $this->register(new DoctrineServiceProvider(), $this['db.options']);
        $this->register(new DoctrineOrmServiceProvider(), $this['doctrine.orm']);

        return $this;
    }

    public function registerCommands(): Application
    {
        $this['console'] = new Console('Mail', '1.0');
        $commands = [
            new FirstCommand(),
        ];
        foreach ($commands as $command) {
            $command->setApplication($this['console']);
            $this['console']->add($command);
        }

        //DBALConsoleRunner::addCommands($this['console']);
        $this['console']->setHelperSet(ORMConsoleRunner::createHelperSet($this['orm.em']));
        ORMConsoleRunner::addCommands($this['console']);

        return $this;
    }
}
