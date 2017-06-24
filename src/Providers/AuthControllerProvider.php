<?php
namespace Scutum\Providers;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Scutum\Controllers\AuthController;

class AuthControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controller = AuthController::class;
        $controllersFactory = $app['controllers_factory'];

        $controllersFactory->get('/', AuthController::class . '::indexAction');

        $controllersFactory->get('/login', sprintf('%s::loginGetAction', $controller));
        $controllersFactory->post('/login', sprintf('%s::loginPostAction', $controller));
        $controllersFactory->get('/registration', sprintf('%s::registrationGetAction', $controller));
        $controllersFactory->post('/registration', sprintf('%s::registrationPostAction', $controller));

        return $controllersFactory;
    }
}
