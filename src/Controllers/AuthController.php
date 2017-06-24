<?php
namespace Scutum\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthController
{
    public function indexAction()
    {
        return new Response('test');
    }

    public function loginGetAction()
    {
        return new Response('login get action');
    }

    public function loginPostAction(Request $request)
    {
        
    }

    public function registrationGetAction()
    {
        
    }

    public function registrationPostAction(Request $request)
    {

    }
}
