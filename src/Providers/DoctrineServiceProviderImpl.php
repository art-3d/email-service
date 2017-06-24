<?php
namespace Scutum\Providers;

use Pimple\ServiceProviderInterface;
use Pimple\Container;
use Silex\Provider\DoctrineServiceProvider;
use Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider;

class DoctrineServiceProviderImpl implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app->register(new DoctrineServiceProvider());
        $app->register(new DoctrineOrmServiceProvider());
    }
}
