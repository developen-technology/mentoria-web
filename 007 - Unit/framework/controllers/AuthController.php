<?php

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        //if ($reques->getMethod())
        $registerModel = new RegisterModel();
        
        if ($request->isPost()) {
            //return "Received data";

            //$registerModel = new RegisterModel();

            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->register()) {
                return 'Success';
            }

            return $this->render('register', [
                'model' => $registerModel
            ]);
        }

        $this->setLayout('auth');
        //return $this->render('register');
        return $this->render('register', [
            'model' => $registerModel
        ]);        
    }    
}