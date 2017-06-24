<?php
namespace Scutum\Applications;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Scutum\Providers\AuthControllerProvider;
use Scutum\Providers\DoctrineServiceProviderImpl;

class WebApplication extends Application
{
    public function run(Request $request = null)
    {
        $this->registerServices()
            ->registerRoutes();

        parent::run($request);
    }

    public function registerServices(): Application
    {
        $this->register(new DoctrineServiceProviderImpl());

        return $this;
    }

    public function registerRoutes(): Application
    {
        $this->mount('/', new AuthControllerProvider());

        return $this;
    }
}
