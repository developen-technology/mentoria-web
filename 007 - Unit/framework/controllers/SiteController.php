<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'SEGIC'
        ];

        //return Application::$app->router->renderView('home', $params);
        return $this->render('home', $params);
    }


    public function contact()
    {
        //return "Show Contact";
        //return Application::$app->router->renderView('contact');
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        /*$body = Application::$app->request->getBody();
        var_dump($body);
        exit;*/
        $body = $request->getBody();
        return "Handling Contact";
    }
}